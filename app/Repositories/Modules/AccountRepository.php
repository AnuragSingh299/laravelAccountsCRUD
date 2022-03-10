<?php

namespace App\Repository\Account;

use App\Interface\Account\AccountRepositoryInterface;
use App\Models\Account;

    class AccountRepository implements AccountRepositoryInterface
    {
        public function all()
        {
            $accounts = Account::all();
            return compact('accounts');
        }

        public function create($data)
        {
            $input = $data->validated();
            Account::create($input);
        }

        public function find($id) 
        {
            $account = Account::find($id);
            return compact('account');
        }

        public function update($id, $data)
        {
            $input = $data->all();
            $account = Account::find($id);
            $account->fill($input)->save();
        }

        public function delete($id)
        {
            return Account::find($id)->delete();
        }
        
    }
?>