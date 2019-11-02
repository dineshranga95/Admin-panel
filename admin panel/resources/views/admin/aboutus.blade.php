@extends('layouts.master')


@section('title')
   Dashboard |Funda of web IT
@endsection



@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add About Us</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         
        </div>
        <form action="/save-aboutus" method="post">
           {{ csrf_field()}}
        <div class="modal-body">
          
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">title</label>
              <input type="text" name="title" class="form-control" id="recipient-name">
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">subtitle</label>
                <input type="text" name="subtitle" class="form-control" id="recipient-name">
              </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">description</label>
              <textarea class="form-control" name="description" id="message-text"></textarea>
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">SAVE</button>
          <button type="button" class="btn btn-danger"  data-dismiss="modal">CANCEL</button>
        </div>
    </form>
      </div>
    </div>
  </div>
 
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> About Us Table
              <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">ADD</button>
            </h4>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Id
                    </th>
                    <th>
                      Title
                    </th>
                    <th>
                     Subtitle
                    </th>
                    <th class="text-right">
                      description
                    </th>
                    <th>
                        EDIT
                      </th>
                      <th>
                        DELETE 
                      </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td class="text-right">
                        $36,738
                      </td>
                      <td> <a href="" type="button" class="btn btn-success">EDIT</a></td>
                      <td> <a href="" type="button" class="btn btn-danger">DELETE</a></td>
                      </tr>                
                        
                                      
                    
                      
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>  

@endsection


@section('scripts')

@endsection
 
    
 