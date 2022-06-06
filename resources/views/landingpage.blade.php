@extends('layouts.app')

        <main>
                
            <div class="container-fluid px-4">
            <h4 class="mt-4">Data Record</h4>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#landingModal"  style="margin-left:85.5%; margin-bottom:1em;">
                <i class="fa fa-plus"></i> | Add Employee </button>
                
            </div>
        </main>
<!-- modal -->

    <script src="js/datatables.js"></script>
    @include('modal_landing')
