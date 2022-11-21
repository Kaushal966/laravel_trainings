@forelse($users as $user)

    {{ $user['name'] }}<br/>
@empty
   <p>No Users Found</p>
@endforelse