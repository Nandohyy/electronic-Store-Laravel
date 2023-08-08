@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="col-lg-9">
      <div class="card">
        <div class="card-header">
          Admin Panel - Home Page
        </div>
        <div class="card-body">
          <h2>Welcome to the Admin Panel</h2>
          <p>Use the sidebar to navigate between the different options.</p>
          <a href="/dashboard">Go to Dashboard</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
