@extends('layout.app')

@section('content')
<div class="jumbotron text-center">
    <div class="container">
      <h1 class="display-4">Hello, I'm MOBAROK</h1>
      <p class="lead">A University Graduate proficient in HTML, CSS, Bootstrap, JavaScript, PHP, and Laravel.</p>
    </div>
  </div>
  
  <!-- Skills Section -->
  <div class="container skills-section">
    <h2 class="text-center mb-4">Skills</h2>
    <div class="row text-center">
      <div class="col-md-4">
        <h4>HTML</h4>
        
      </div>
      <div class="col-md-4">
        <h4>CSS</h4>
        
      </div>
      <div class="col-md-4">
        <h4>JavaScript</h4>
        
      </div>
    </div>
    <div class="row text-center mt-4">
      <div class="col-md-4">
        <h4>Bootstrap</h4>
        
      </div>
      <div class="col-md-4">
        <h4>PHP</h4>
        
      </div>
      <div class="col-md-4">
        <h4>Laravel</h4>
        
      </div>
    </div>
  </div>
  
  <!-- Call-to-Action Section -->
  <div class="container mt-5">
    <div class="row text-center">
      <div class="col-md-12">
        <h2>Ready to build something amazing together?</h2>
        <p class="lead">Let's turn your ideas into reality. Contact me to discuss your project or hire my services.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Get in Touch</a>
      </div>
    </div>
  </div>
@endsection


