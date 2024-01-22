@extends('layouts.template_guru')

@section('title')

@section('content')
    <div class="col-md-12" style="background-color: #B7CDF5">
        <div class="container">
            <div class="container" style="-webkit-text-fill-color: white">
                <table border="1" style="width: 100%; border-radius: 40px;">
                    <tr style="background-color: #E4DEDB">
                        <td style="width: 100px">
                            <div class="card" style="background-color: #0E1A69; margin:5px">
                                <div class="status-icon incomplete"></div>
                                <h5>Final Exam</h5>
                                <p>0</p>

                            </div>
                        </td>
                        <td style="width: 700px">
                            <div class="card" style="background-color:#E4DEDB;">
                                <ul type="circle" style="-webkit-text-fill-color: #0E1A69">
                                    <li>Icomplete</li>
                                    <li>Completed</li>
                                    <li>Expired</li>
                                </ul>
                            </div>
                        </td>
                        <td style="width: 7px">
                            <button type="button" class="btn btn-primary"
                                style="background-color: #0E1A69; font-size:10px; margin:5px"><b>VIEW</b></button>
                        </td>
                    </tr>
                    <tr style="background-color:#E4DEDB;">
                        <td>
                            <div class="card" style="background-color: #0E1A69; margin:5px">
                                <div class="status-icon completed"></div>
                                <h5>Quiz</h5>
                                <p>0</p>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="background-color: #E4DEDB">
                                <ul type="circle" style="-webkit-text-fill-color: #0E1A69">
                                    <li>Icomplete</li>
                                    <li>Completed</li>
                                    <li>Expired</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary"
                                style="background-color: #0E1A69; font-size:10px; margin:5px"><b>VIEW</b></button>
                        </td>
                    </tr>
                    <tr style="background-color:#E4DEDB;">
                        <td>
                            <div class="card" style="background-color: #0E1A69; margin:5px">
                                <div class="status-icon expired"></div>
                                <h5>Asiggnment</h5>
                                <p>0</p>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="background-color: #E4DEDB;">
                                <ul type="circle" style="-webkit-text-fill-color: #0E1A69">
                                    <li>Icomplete</li>
                                    <li>Completed</li>
                                    <li>Collected</li>
                                    <li>Overdue</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary"
                                style="background-color: #0E1A69; font-size:10px; margin:5px"><b>VIEW</b></button>
                        </td>
                    </tr>
                    <tr style="background-color:#E4DEDB;">
                        <td>
                            <div class="card" style="background-color: #0E1A69; margin:5px">
                                <div class="status-icon collected"></div>
                                <h5>Material</h5>
                                <p>0</p>
                        </td>
                        <td>
                            <div class="card" style="background-color: #E4DEDB">
                                <ul type="circle" style="-webkit-text-fill-color: #0E1A69">
                                    <li>Icomplete</li>
                                    <li>Completed</li>
                                    <li>Expired</li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary"
                                style="background-color: #0E1A69; font-size:10px; margin:5px"><b>VIEW</b></button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
