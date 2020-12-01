@extends('layouts.dashboard')
@section('content')
    
<div class="card shadow mb-4">
    <div class="card-header py-3 align-items-center justify-content-between d-sm-flex">
      <h6 class="m-0 font-weight-bold text-primary">Outcome Table</h6>
     
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Name</th>
              <th>Quantity</th>

            </tr>
          </thead>
          
          <tbody>
      @foreach ($outcomes as $outcome)
                  
              
            <tr>
              <td>{{$outcome->tanggal}}</td>
              <td>{{$outcome->income->name}}</td>
              <td>{{$outcome->quantity}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
{{-- <!-- Button trigger modal --> --}}

  
 

  
@endsection