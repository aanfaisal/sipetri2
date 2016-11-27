@extends('layouts.blank')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3>Data BebanPenerangan</h3>
          </div>
                  <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">Go!</button>
                        </span>
                      </div>
                    </div>
                  </div>
        </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2> Bebanpenerangan  <small> sipetri</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  <li><a class="close-link"><i class="fa fa-close"></i></a>
                  </li>
                </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

                <h1>Bebanpenerangan <a href="{{ url('bebanpenerangan/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data BebanPenerangan</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th> Nm Ruang </th><th> Jns Lamp </th><th> Jml Lamp </th><th> Daya Lamp </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach($bebanpenerangan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nm_ruang }}</td><td>{{ $item->jns_lamp }}</td><td>{{ $item->jml_lamp }}</td><td>{{ $item->daya_lamp }}</td>
                                <td>
                                    <a href="{{ url('bebanpenerangan/' . $item->bebanpen_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['bebanpenerangan', $item->bebanpen_id],
                                        'style' => 'display:inline'
                                    ]) !!}

                                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete BebanPenerangan" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete BebanPenerangan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $bebanpenerangan->render() !!} </div></center>
                </div>
                </div>
            <div class="clearfix"></div>
          </div>
        </div>
       </div>
      </div>
    </div>
@endsection
