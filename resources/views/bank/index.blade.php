
@extends('layouts.app')

@section('content')
<div class="container">

      <h1>From Bank</h1>
      <a href="bank/create" type="text" class="btn  btn-primary">Add</a>
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>ชื่อ</th>
          <th>วิธีการโอน</th>
          <th>โอนจากธนาคาร</th>
          <th>โอนจากเลขบัญชี</th>
          <th>โอนจากชื่อบัญชี</th>
          <th>วันที่โอน</th>
          <th>เวลาที่โอน</th>
          <th>จำนวนเงิน</th>
          <th>โอนเข้าธนาคาร</th>
          <th>โอนเข้าเลขบัญชี</th>
          <th>โอนเข้าชื่อบัญชี</th>
          <th>สถานะการโอน</th>
          <th>เกี่ยวกับ</th>
        </tr>

        @foreach ($banks as $bank)
        <tr>
          <td>{{ $bank->id }}</td>
          <td>{{ $bank->user->name }}</td>
          <td>{{ $bank->method }}</td>
          <td>{{ $bank->fromBank }}</td>
          <td>{{ $bank->fromAccountNumber }}</td>
          <td>{{ $bank->fromAccountName }}</td>
          <td>{{ $bank->transferDate }}</td>
          <td>{{ $bank->transferTime }}</td>
          <td>{{ $bank->amount }}</td>
          <td>{{ $bank->toBank }}</td>
          <td>{{ $bank->toAccountNumber }}</td>
          <td>{{ $bank->toAccountName }}</td>
          <td>{{ $bank->transferStatus }}</td>
          <td>
            <form method="post" action="/bank/{{ $bank->id }}">
              <input name="_token" type="hidden" value="{{ csrf_token() }}">
              <input name="_method" type="hidden" value="DELETE">
              <a href="bank/{{ $bank->id }}/edit" type="text" class="btn  btn-warning">Edit</a>
              <button type="submit" class="btn  btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>

</div>
@endsection
