<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TokenIssuedMail;

class TokenController extends Controller
{
    public function issueToken(Request $request)
{
    $lastToken = Token::latest()->first();
    $nextNumber = $lastToken ? $lastToken->id + 1 : 1;
    $tokenNumber = "TKN-" . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

    $token = Token::create([
        'token_number' => $tokenNumber,
        'service_type' => $request->service_type ?? 'General',
        'status' => 'waiting',
    ]);

    if ($request->email) {
    Mail::to($request->email)->send(new \App\Mail\TokenIssuedMail($token));
    }

    return back()->with([
    'success' => 'Your Token Number is: ' . $token->token_number,
    'token_id' => $token->id 
    ]);
}


  public function showKiosk()
  {
    return view('kiosk');
  }

  
public function showCounter()
{
    $tokens = Token::where('status', 'waiting')->get();
    $callingToken = Token::where('status', 'calling')->first();

    return view('counter', compact('tokens', 'callingToken'));
}


public function callNext(Request $request)
{
    
    Token::where('status', 'calling')->update(['status' => 'completed']);

    
    $nextToken = Token::where('status', 'waiting')->first();

    if ($nextToken) {
        $nextToken->update([
            'status' => 'calling',
            'counter_number' => $request->counter_number ?? 1
        ]);
    }

    return back()->with('success', $nextToken ? 'Calling ' . $nextToken->token_number : 'No tokens in queue');
}

public function showDisplay()
{
    
    $callingToken = Token::where('status', 'calling')->first();
    
   
    $waitingTokens = Token::where('status', 'waiting')->limit(5)->get();

    return view('display', compact('callingToken', 'waitingTokens'));
}

public function trackToken($id)
{
    $token = Token::findOrFail($id);
    return view('track', compact('token'));
}

public function showDashboard()
{
    $callingToken = Token::where('status', 'calling')->first();
    $waitingCount = Token::where('status', 'waiting')->count();
    
    return view('dashboard', compact('callingToken', 'waitingCount'));
}

}