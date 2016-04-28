@extends('layouts.master')

@section('header.title') <?php echo Lang::get('title_master.page_survey'); ?> @stop
@section('header.page_title') <?php echo Lang::get('title_master.page_survey'); ?> @stop

@section('body.content')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo Lang::get('title_master.surveys_list_top'); ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a>&nbsp;</a></li>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <div class="col-md-12" style="width: 600px;">
                                        <input type="text" name="short_name" class="form-control" value="" />
                                        <input type="text" name="short_name" class="form-control" value="" />
                                        <input type="text" name="short_name" class="form-control" value="" />
                                        <input type="text" name="short_name" class="form-control" value="" />
                                    </div>
                                </ul>
                            </li>
                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered table-hover dataTable">
                            <thead>
                                <tr>
                                    <th class="sorting_asc" aria-sort="ascending" style="width: 5%;">#</th>
                                    <th class="sorting" style="width: 50%;"><?php echo Lang::get('title.title'); ?></th>
                                    <th style="width: 10%;"><?php echo Lang::get('title.status'); ?></th>
                                    <th style="width: 20%;"><?php echo Lang::get('title.date_range'); ?></th>
                                    <th><?php echo Lang::get('title.action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surveys as $survey)
                                <tr>
                                    <td>{{ $survey->id }}</td>
                                    <td class="row-wrapper">
                                        <a href="{{ route('backend_surveys.edit', $survey->id) }}">{{ $survey->title }}
                                    </td>
                                    <td>
                                        {{ Lang::get('title.survey_statuses.' . $survey->status) }}
                                    </td>
                                    <td class="row-wrapper">
                                        <span>{{ $survey->start_date != null ? $survey->start_date : '-' }}&nbsp;~&nbsp;</span>
                                        <span>{{ $survey->end_date != null ? $survey->end_date : '' }}</span>
                                    </td>
                                    <td class="row-wrapper center-margin">
                                        <a href="{{ route('backend_surveys.edit', $survey->id) }}">
                                            <?php echo Lang::get('title.action_edit'); ?> 
                                        </a> &nbsp;|&nbsp;
                                        <a href="#">
                                            <?php echo Lang::get('title.action_delete'); ?>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                    {!! $surveys->render() !!}
                                </div>
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <a href="{{ route('backend_surveys.create') }}" class="btn btn-primary">
                                <?php echo Lang::get('title.action_regist'); ?>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('body.js')
<link href="/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="/js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="/js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Datatables-->
<script src="/js/datatables/jquery.dataTables.min.js"></script>
<script src="/js/datatables/dataTables.bootstrap.js"></script>
<script src="/js/datatables/dataTables.buttons.min.js"></script>
<script src="/js/datatables/buttons.bootstrap.min.js"></script>
<script src="/js/datatables/jszip.min.js"></script>
<script src="/js/datatables/pdfmake.min.js"></script>
<script src="/js/datatables/vfs_fonts.js"></script>
<script src="/js/datatables/buttons.html5.min.js"></script>
<script src="/js/datatables/buttons.print.min.js"></script>
<script src="/js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="/js/datatables/dataTables.keyTable.min.js"></script>
<script src="/js/datatables/dataTables.responsive.min.js"></script>
<script src="/js/datatables/responsive.bootstrap.min.js"></script>
<script src="/js/datatables/dataTables.scroller.min.js"></script>


<!-- pace -->
<script src="/js/pace/pace.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
//        $('#datatable').DataTable({
//            keys: true,
//            paging: none,
//        });
});
//    TableManageButtons.init();
</script>
@stop