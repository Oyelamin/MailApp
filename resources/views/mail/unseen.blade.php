@extends('layouts.app')

@section('content')
<div class="container-mail">
     <div class="mail-box">
                      <aside class="sm-side">
                          <div class="user-head">
                              <a class="inbox-avatar" href="javascript:;">
                                <i style="color: red;" class="fas fa-user-circle"></i>
                                  {{-- <img  width="64" hieght="60" src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg"> --}}
                              </a>
                              <div class="user-name">
                                  <h5><a href="#">Blessing Ajala</a></h5>
                                  <span><a href="#">blessingcodephp@Gmail.com</a></span>
                              </div>
                              <a class="mail-dropdown pull-right" href="javascript:;">
                                  <i style="color:red;" class="fa fa-chevron-down"></i>
                              </a>
                          </div>
                          <div class="inbox-body">
                              <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                                  Compose
                              </a>
                              <!-- Modal -->
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="button is-danger is-medium close" type="button">X</button>
                                              <h4 class="modal-title">Compose</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form role="form" class="form-horizontal">
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">To</label>
                                                      <div class="col-lg-10">
                                                          <input type="text" placeholder="" id="inputEmail1" class="form-control">
                                                      </div>
                                                    
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                      <div class="col-lg-10">
                                                          <input type="text" placeholder="" id="cc" class="form-control">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Subject</label>
                                                      <div class="col-lg-10">
                                                          <input type="text" placeholder="" id="inputPassword1" class="form-control">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Message</label>
                                                      <div class="col-lg-10">
                                                          <textarea rows="10" cols="30" class="form-control" id="" name=""></textarea>
                                                      </div>
                                                  </div>
    
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <span class="btn green fileinput-button">
                                                            <i class="fa fa-plus fa fa-white"></i>
                                                            <span>Attachment</span>
                                                            <input type="file" name="files[]" multiple="">
                                                          </span>
                                                          <button class="btn btn-send" type="submit">Send</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div><!-- /.modal-content -->
                                  </div><!-- /.modal-dialog -->
                              </div><!-- /.modal -->
                          </div>
                          <ul class="inbox-nav inbox-divider">
                              <li class="active">
                                  <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>
    
                              </li>
                              <li>
                                  <a href="#"><i class="far fa-share-square"></i> Sent Mail</a>
                              </li>
                              <li>
                                  <a href="#"><i class="far fa-star"></i> Important</a>
                              </li>
                              <li>
                                  <a href="#"><i class="fas fa-drafting-compass"></i> Drafts <span class="label label-info pull-right">30</span></a>
                              </li>
                              <li>
                                  <a href="#"><i class="far fa-trash-alt"></i> Trash</a>
                              </li>
                          </ul>
                         
                         
    
                          <div class="inbox-body text-center">
                              <div class="btn-group">
                                  <a class="btn mini btn-primary" href="javascript:;">
                                      <i class="fa fa-plus"></i>
                                  </a>
                              </div>
                              <div class="btn-group">
                                  <a class="btn mini btn-success" href="javascript:;">
                                      <i class="fa fa-phone"></i>
                                  </a>
                              </div>
                              <div class="btn-group">
                                  <a class="btn mini btn-info" href="javascript:;">
                                      <i class="fa fa-cog"></i>
                                  </a>
                              </div>
                          </div>
    
                      </aside>
                      <aside class="lg-side">
                          <div class="inbox-head">
                                <h3>Inbox Messages</h3>
                                <form action="#" class="pull-right position">
                                    <div class="input-append">
                                        <input type="text" class="sr-input" placeholder="Search Mail">
                                        <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                          <div class="inbox-body">
                             <div class="mail-option">
                                 <div class="chk-all">
                                     <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                     <div class="btn-group">
                                            <a data-original-title="Refresh" data-placement="top" href="#" class="but mini tooltips">
                                                All 
                                                <i class="fa fa-angle-down "></i>
                                            </a>
                                         {{-- <a  href="#" class="" aria-expanded="false">
                                             All
                                             <i class="fa fa-angle-down "></i>
                                         </a> --}}
                                         {{-- <ul class="dropdown-menu">
                                             <li><a href="#"> None</a></li>
                                             <li><a href="#"> Read</a></li>
                                             <li><a href="#"> Unread</a></li>
                                         </ul> --}}
                                     </div>
                                 </div>
                                
                                 
                                 <div class="btn-group">
                                     <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                         <i class="fas fa-redo"></i>
                                     </a>
                                 </div>
                                 
                                 
    
                                 <ul class="unstyled inbox-pagination">
                                     {{$mess_inbox->links()}}
                                 </ul>
                             </div>
                              <table class="table table-inbox table-hover">
                                <tbody>
                                
                                @if($mess_inbox)
                                
                                    @foreach($mess_inbox as $inbox)
                                  <tr class="unread">
                                      <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                      </td>
                                      <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                      <td class="view-message  dont-show"><a href='/mail/{{$inbox->id}}'><?php echo $inbox->fro_name; ?></a></td>
                                      <td class="view-message "> 
                                        <?php
                                            echo "<b>". $inbox->subject."</b> - <small>";
                                            if (strlen($inbox->body) > 50) {
                                                    echo $inbox->fro."..";
                                            }else{
                                                echo $inbox->body;
                                            }
                                        ?>
                                      </td>
                                      <td class="view-message  inbox-small-cells">
                                            @if($inbox->attachment > 0)
                                                <i class="fa fa-paperclip"></i>
                                            @else
                                            @endif

                                    </td>
                                    <td class=" text-right">
                                       <small> <?php echo $inbox->date;  ?></small>
                                    </td>
                                  </tr>
                                        
                                @endforeach
                                @if(empty($inbox->subject))
                                <div class="notification is-primary">
                                    <h1>No New Messages Yet!!</h1>
                                </div>
                                  
                                @endif
                           
                            @endif
                                  
                              </tbody>
                              </table>
                          </div>
                      </aside>
                  </div>
    </div>
@endsection

