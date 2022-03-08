@if ($attributes['name'] == 'name')
     {{ Form::text('name', $account->name ?? "" , ['class' => 'form-control'] ) }}
@elseif ($attributes['name'] == 'first_name')
     {{ Form::text('first_name', $account->first_name ?? "" , ['class' => 'form-control'] ) }}
@elseif ($attributes['name'] == 'last_name')
     {{ Form::text('last_name', $account->last_name ?? "" , ['class' => 'form-control'] ) }}
@endif