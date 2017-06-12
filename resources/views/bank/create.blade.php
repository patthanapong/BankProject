
@extends('layouts.app')

@section('content')

  <script type="text/javascript">
    $(function(){
    	$("#dateInput").datetimepicker({
        altField: "#timeInput",
        dateFormat: 'yy-mm-dd',
        timeFormat: 'HH:mm:ss'
    	});
    });

    </script>

  <div class="container">
    <h1>From Create</h1>
          <form method="post" action="/bank">
              {{ csrf_field() }}

            <div class="form-group">
              <label for="method">วิธีการโอน</label>
              <select class="form-control" name="method" id="method">
                <option value="">SELECT</option>
                <option value="ATM">ATM</option>
                <option value="Internet Banking">Internet Banking</option>
                <option value="Moblie Banking์">Moblie Banking</option>
                <option value="Bank">Bank</option>

              </select>
              <!--<input type="text" class="form-control" name="method" id="method" placeholder="Method">-->
            </div>
            <div class="form-group">
              <label for="fromBank">โอนจากธนาคาร</label>
              <!--<input type="text" class="form-control"  name="fromBank" id="fromBank" placeholder="FromBank">-->
              <select class="form-control" name="fromBank" id="fromBank">
                <option value="">SELECT</option>
                <option value="ธ.กสิกรไทย">ธ.กสิกรไทย</option>
                <option value="ธ.กรุงเทพ">ธ.กรุงเทพ</option>
                <option value="ธ.ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
                <option value="ธ.กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
                <option value="ธ.กรุงไทย">ธ.กรุงไทย</option>
                <option value="ธ.ทหารไทย">ธ.ทหารไทย</option>
                <option value="ธ.ออมสิน">ธ.ออมสิน</option>
              </select>
            </div>
            <div class="form-group">
              <label for="fromAccountNumber">โอนจากเลขบัญชี</label>
              <input type="text" class="form-control"  name="fromAccountNumber" id="fromAccountNumber" placeholder="FromAccountNumber">
            </div>
            <div class="form-group">
              <label for="fromAccountName">โอนจากชื่อบัญชี</label>
              <input type="text" class="form-control"  name="fromAccountName" id="fromAccountName" placeholder="FromAccountName">
            </div>
            <div class="form-group">
              <label for="transferDate">วันที่โอน</label>
              <input type="text" class="form-control"  name="transferDate" id="dateInput"  placeholder="TransferDate">
            </div>
            <div class="form-group">
              <label for="transferTime">เวลาที่โอน</label>
              <input type="text" class="form-control"  name="transferTime" id="timeInput" placeholder="TransferTime">
            </div>
            <div class="form-group">
              <label for="amount">จำนวนเงิน</label>
              <input type="text" class="form-control"  name="amount" id="amount" placeholder="Amount">
            </div>
            <div class="form-group">
              <label for="toBank">โอนเข้าธนาคาร</label>
              <select class="form-control" name="toBank" id="toBank">
                <option value="">SELECT</option>
                <option value="ธ.กสิกรไทย">ธ.กสิกรไทย</option>
                <option value="ธ.กรุงเทพ">ธ.กรุงเทพ</option>
                <option value="ธ.ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
                <option value="ธ.กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
                <option value="ธ.กรุงไทย">ธ.กรุงไทย</option>
                <option value="ธ.ทหารไทย">ธ.ทหารไทย</option>
                <option value="ธ.ออมสิน">ธ.ออมสิน</option>
              </select>
              <!--<input type="text" class="form-control"  name="toBank" id="toBank" placeholder="ToBank">-->
            </div>
            <div class="form-group">
              <label for="toAccountNumber">โอนเข้าเลขบัญชี</label>
              <input type="text" class="form-control"  name="toAccountNumber" id="toAccountNumber" placeholder="ToAccountNumber">
            </div>
            <div class="form-group">
              <label for="toAccountName">โอนเข้าชื่อบัญชี</label>
              <input type="text" class="form-control"  name="toAccountName" id="toAccountName" placeholder="ToAccountName">
            </div>




            <button type="submit" class="btn btn-success">Submit</button>
          </form>
  </div>
@endsection
