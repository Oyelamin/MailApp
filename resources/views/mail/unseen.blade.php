@extends('layouts.app')

@section('content')
   
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
    <a class="navbar-brand" href> <i class="fas fa-mail-bulk"></i> MAIL BOXES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        
    </button>
<br><br><hr/>
<h4 class=" button is-rounded is-link is-medium"> <i style="color:rgb(225, 65, 65);" class="fas fa-pen-alt"></i> COMPOSE</h4>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            
            <li class="nav-item">
                <a href="/mail" style="color:rgba(21, 21, 65, 0.972);" class="nav-link dropdown-toggle" > <i class="fas fa-inbox"></i> INBOX</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"> <i class="fab fa-squarespace"></i> UNREAD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"> <i class="far fa-share-square"></i> SENT</a>
            </li><br><br><br><br><br><br><br><br><br><br></BR>
            <li class="nav-item">
                <a href="https://www.initsng.com" class="nav-link"> <i class="fas fa-home"></i>INITS LIMITED</a>
            </li>
        </ul>
        
</nav>

<div class="container" style="float:right;">
    <div id="inbox" class="box3 notification is-link">
        <h1> <i class="fas fa-inbox"></i> Unseen Messages</h1>
    </div>
    
   

    <div class="container">
        <?php if($mess_inbox):?>
        <?php  foreach($mess_inbox as $inbox):?>
            <div style="margin-top:70px;margin-right:-30px;" class="notification is-danger message-display container box2 animated slideInRight">
                <small style="color:silver;">
                
                    <i class="fas fa-calendar-alt"></i> Sent on <?php echo $inbox->date;  ?>.<br/>
                    <i class="fab fa-phoenix-framework"></i> From: <b><?php echo $inbox->fro;  ?></b>
            
                </small>
                        <h1 style="color:white;" class="h1">
                        
                        <?php echo $inbox->subject; ?>
                    
                    </h1>
                   
                        <h5 style="color:white;" class="h5">
                        <?php echo $inbox->body; ?>
                        </h5>
                        <hr>
                        <img style="border-radius:10px;width:20px;height:20px;" src="{{asset('img/gmail.jpg')}}" alt="gmail">
                    
            </div>
        <?php endforeach;?>
        <div class="p-links">
            <div class="box2 ">
                {{$mess_inbox->links()}}
            </div>
        </div>
        
       
<?php endif; ?>
    </div>

</div>
@endsection

