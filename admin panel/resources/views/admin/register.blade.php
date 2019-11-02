@extends('layouts.master')


@section('title')
   Registered Roles |Funda of web IT
@endsection
        


@section('content')

<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Registered Roles</h4>
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
                      Name
                    </th>
                    <th>
                      Phone
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                    Usertype
                    </th>
                    <th class="text-right">
                    EDIT
                    </th>
                    <th class="text-right">
                        DELETE
                    </th>
                  </thead>
                  <tbody>
                      @foreach ($user as $row)
                          
                     
                    <tr>
                        <td>
                            {{ $row->id}}
                             </td>
                      <td>
                     {{ $row->name}}
                      </td>
                      <td>
                     {{ $row->phone}}
                      </td>
                      <td>
                          {{ $row->email}}
                       </td>
                           
                      
                      <td>
                           - {{ $row->usertype}}
                             </td>
                      <td class="text-right">
                        <a href="/role-edit/{{$row->id}}" class="btn btn-success">EDIT</a>
                      </td>
                      <td class="text-right">
                        <form action="/role-delete/{{$row->id}}" method="post" >
                         {{ csrf_field()}}
                         {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger">DELETE</button>
                            
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
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

    