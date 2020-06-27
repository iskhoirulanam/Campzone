@extends('layouts.admin')
@section('konten')

<div class="container">

    <div class="container-fluid">
        <div class="row">
            <h4 class="one">Merek</h4>
            <button class="btn btn-info ml-auto" id="createNewMerek">Create Merek</button>
        </div>
    </div>
    <br>
    <table id="dataTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Author</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

{{-- create/update book modal--}}
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="merekForm" name="merekForm" class="form-horizontal">
                    <input type="hidden" name="merek_id" id="merek_id">
                    <div class="form-group">
                        <label for="name_merek" class="col-sm-2 control-label">Nama Merek</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name_merek" name="name_merek"
                                placeholder="Enter name" value="" maxlength="50" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Slug</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="slug" name="slug"
                                placeholder="Enter author name" value="" maxlength="50" required="" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection