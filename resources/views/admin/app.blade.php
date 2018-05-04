<!DOCTYPE html>
<html>
<head>
   @include('admin.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('admin.layouts.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('admin.layouts.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  @section('main-content')

  @show
  <!-- /.content-wrapper -->
  

  @include('admin.layouts.footer')