@extends('templates.mainTemplate')

@section('title', 'Contact Us')

@section('content')
<div class="mockup-phone">
    <div class="camera"></div> 
    <div class="display">
      <div class="artboard artboard-demo phone-1">
        <form class="Main__Form">
            <div class="Main__Form__Item">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="required:border-red-700" require placeholder="Insert name">
            </div>
            <div class="Main__Form__Item">
                <label for="surname">Surname</label>
                <input type="text" name="surname" id="surname" placeholder="Insert surname">
            </div>
            <div class="Main__Form__Item">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" placeholder="Say something..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-full">Send</button>
        </form>
      </div>
    </div>
  </div>
@endsection