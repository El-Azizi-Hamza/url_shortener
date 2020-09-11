@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add url</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                
                    <div class="myform form ">
               <form action="{{ url ('/addurl') }}" method="post">
               @csrf
                  <div class="form-group">
                     <input type="url" name="url"  class="form-control my-input" id="url" placeholder="URL">
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Short</button>
                  </div>
                  
                
                
               </form>
            </div>


                </div>
          
            </div>  <br>
            
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">URL</th>
      <th scope="col">number of visitors</th>
      <th scope="col">link</th>
    </tr>
  </thead>
  <tbody>

            <?php
        $token =  csrf_token();
        $lien=url ('/delete') ;

           foreach($my_links as $my_link){
            echo'<tr>';
           echo'<th scope="row">'.$my_link['id_link'].'</th>';
           echo'<td>'.$my_link['url'].'</td>';
          echo'<td>'.$my_link['nb'].'</td>';
          echo'<td>http://127.0.0.1:8000/url/'.$my_link['id_link'].'</td>';
          echo"<td>
          <form action='".$lien."' method='post'>
          <input type='hidden' name='_token' value='".$token."'>
          <input type='hidden' name='id' value='".$my_link['id_link']."'>
          <input type='submit' name ='submit' value='Delete' class='btn btn-primary'>
          </form></td>
          ";
               echo'</tr>';
            }
        ?> 

        </tbody>
</table>
        </div>
        
        
    </div>
</div>
@endsection
