<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Interfaces\AccountRepositoryInterface;
//use App\Repositories\AccountRepository;


class AccountController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function __construct(AccountRepositoryInterface $account)
    {
        $this->accountRepo = $account;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $accounts = Account::all();
        // return view('account.index', compact('accounts')); before repo

        return view('account.index', ['accounts' => $this->accountRepo->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AccountRequest $request)
    {
        /*$input = $request->validated();
        //$input['hobby'] = $request->input('hobby');
        //$input['hobby'] = implode(',', $request->input('hobby'));
        Account::create($input);
        return redirect()->route('account.index'); 
        "before repo"
        */ 

        $data = $request->validated();
        $this->accountRepo->create($data);
        return redirect()->route('account.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$account = Account::find($id);
        return view('account.show', ['account' => $this->accountRepo->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$account = Account::find($id);
        return view('account.edit', ['account' => $this->accountRepo->find($id)]);
        //dd($account);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $input = $request->except(['_token', '_method']);
        // $input['hobby'] = implode(',', $request->input('hobby'));
        // Account::where('id', $id)
        //     ->update($input);
        /*$input = $request->all();
        $account = Account::find($id);
        $account->fill($input)->save();            
        return redirect()->route('account.index');
        before repo
        */
        
        $this->accountRepo->update($id, $request);
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Account::find($id)
        //         ->delete(); before repo

        $this->accountRepo->delete($id);
        
        return redirect()->route('account.index');
    }
}
