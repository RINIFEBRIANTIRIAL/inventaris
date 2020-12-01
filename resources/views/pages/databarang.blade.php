@extends('layouts.dashboard')
@section('content')
    
{{-- <div class="card shadow mb-4">
    <div class="card-header py-3 align-items-center justify-content-between d-sm-flex">
      <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        add 
      </button> --}}
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Total Price</th>

            </tr>
          </thead>
          
          <tbody>
              @foreach ($incomes as $income)
                  
              
            <tr>
              <td>{{$income->tanggal}}</td>
              <td>{{$income->name}}</td>
              <td>{{$income->quantity}}</td>
              <td>{{$income->price}}</td>
              <td>{{$income->total_price}}</td>
              <td>
                  
              {{-- <form action="{{route('income.destroy',$income->id)}}" method="post">
                @method('delete')
                @csrf
                  <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                </form>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditModal" data-id="{{$income->id}}">
                  out
                </button> --}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
<!-- Button trigger modal -->

  
  {{-- <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{route('income.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal">
            </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label >Quantity</label>
                  <input type="integer" class="form-control" name="quantity">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="integer" class="form-control" name="price">
                  </div>
                  <div class="form-group">
                    <label>Total Price</label>
                    <input type="integer" class="form-control" name="total_price">
                  </div>
                
            
             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">add</button>
        </div>
    </form>
      </div>
    </div>
  </div> --}}

   {{-- <!-- Modal -->
   <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Item</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="" method="post">
            @method('put')
            @csrf
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tanggal">
            </div>
                <div class="form-group">
                  <label>Quantity</label>
                  <input type="integer" class="form-control" name="quantity">
                </div>
               
             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">add</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@endsection
@push('addon-script')
    <script>
    $ (document).ready(function(){
        $('#EditModal').on('show.bs.modal',function(event) {
            var button = $(event.relatedTarget)
            var incomeid = button.data('id');
        
            var modal = $ (this)
            modal.find('.modal-body form').attr('action', '/income/'+incomeid)
        })
    })
    </script>
@endpush --}}