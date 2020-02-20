@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Inventories</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('inventories.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('inventories.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('ekspor/tableexport.css') }}">
@stop

@section('scripts')

    <script src="{{ asset('ekspor/xlsx.core.min.js') }}"></script>
    <script src="{{ asset('ekspor/html2canvas.js') }}"></script>
    <script src="{{ asset('ekspor/FileSaver.js') }}"></script>
    <script src="{{ asset('ekspor/tableexport.js') }}"></script>
    <script>
        $("#inventory-{{ date('Y-m-d') }}").tableExport({

            // Displays table headers (th or td elements) in the <thead>
            headers: true,

            // Displays table footers (th or td elements) in the <tfoot>
            footers: true,

            // Filetype(s) for the export
            formats: ["xls", "csv", "txt"],

            // Filename for the downloaded file
            fileName: "name",

            // Style buttons using bootstrap framework
            bootstrap: false,

            // Automatically generates the built-in export buttons for each of the specified formats
            exportButtons: true,

            // Position of the caption element relative to table
            position: "top",

            // (Number, Number[]), Row indices to exclude from the exported file(s)
            ignoreRows: null,

            // (Number, Number[]), column indices to exclude from the exported file(s)
            ignoreCols: [7,10],

            // Removes all leading/trailing newlines, spaces, and tabs from cell text in the exported file(s)
            trimWhitespace: false,

            // (Boolean), set direction of the worksheet to right-to-left (default: false)
            RTL: false,

            // (id, String), sheet name for the exported spreadsheet, (default: 'id')
            sheetname: "id"

        });
        $(document).ready(function() {
            $('#inventory-{{ date("Y-m-d") }}').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true,
                'scrollX'     : true
            });
        });
    </script>
@stop
