<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
  public function index()
    {
          $banks = Bank::all();
          return view('bank.index', compact('banks'));
    }

    public function cretae()
      {
            return view('bank.create');
      }

      public function store(Request $request)
        {
          Bank::create([
            'method' => $request->method,
            'fromBank' => $request->fromBank,
            'fromAccountNumber' => $request->fromAccountNumber,
            'fromAccountName' => $request->fromAccountName,
            'transferDate' => $request->transferDate,
            'transferTime' => $request->transferTime,
            'amount' => $request->amount,
            'toBank' => $request->toBank,
            'toAccountNumber' => $request->toAccountNumber,
            'toAccountName' => $request->toAccountName,
            'transferStatus' => $request->transferStatus,
            'user_id' => auth()->user()->id

          ]);
              return redirect('bank');
        }
      public function edit(Bank $bank)
      {

        return view('bank.edit', compact('bank'));

      }

      public function update(Request $request, $id)
      {
        $bank = Bank::find($id);
        $bank->update([
          'method' => $request->method,
          'fromBank' => $request->fromBank,
          'fromAccountNumber' => $request->fromAccountNumber,
          'fromAccountName' => $request->fromAccountName,
          'transferDate' => $request->transferDate,
          'transferTime' => $request->transferTime,
          'amount' => $request->amount,
          'toBank' => $request->toBank,
          'toAccountNumber' => $request->toAccountNumber,
          'toAccountName' => $request->toAccountName,
          'transferStatus' => $request->transferStatus,
          'user_id' => auth()->user()->id
        ]);


        return redirect('bank');
      }

      public function destroy($id)
      {
        $bank = Bank::find($id);
        $bank->delete();

        return redirect('bank');
      }

}
