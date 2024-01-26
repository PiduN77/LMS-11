@extends('layouts.template_guru')

@section('title')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="btn-group" role="group">
                        <button class="btn btn-outline-secondary" type="button">belum mengerjakan</button>
                        <button class="btn btn-outline-secondary" type="button">sudah mengerjakan</button>
                        <button class="btn btn-outline-secondary" type="button">kadaluwarsa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <blockquote class="blockquote blockquote-primary">
                    <h3 style="color: white">
                        Tugas 1
                    </h3>
                    <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer style="color: white">Mata Pelajaran</footer>
                  </blockquote>
            </div>
        </div>
    </div>
</div>
@endsection
