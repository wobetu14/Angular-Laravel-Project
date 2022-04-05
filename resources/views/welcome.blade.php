<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{--<link href="css/app.css" rel="stylesheet" type="text/css"/>--}}




        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

        {{--<script type="application/javascript" src="js/bootstrap.js"></script>--}}
        {{--<script type="application/javascript" src="js/app.js"></script>--}}


        {{--Angular controllers and services--}}
        <script src="js/angular/angular.min.js"></script>
        <script src="js/angular/angular-cookies.min.js"></script>
        <script src="js/angular/angular-loader.min.js"></script>
        <script src="js/angular/angular-route.min.js"></script>
        <script src="js/angular/angular-touch.min.js"></script>

        <script src="js/controllers/EmployeesController.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Roha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Employees</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="container" ng-app="empModule" ng-controller="empController">
        <div class="row">
            <div class="col-lg-6">
                <h3>Employee Information</h3>
                <form id="emp_frm">
                    <div class="form-group">
                        {!! Form::label('employee_id','Employee ID') !!}
                        <input type="text" class="form-control" ng-model="emp_id"/>
                        <span class="text-info">ID Number: @{{ emp_id }}</span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('first_name','First Name') !!}
                        <input type="text" class="form-control" ng-model="firstname"/>
                        <span class="text-info">Welcome @{{ firstname }}!</span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('last_name','Last Name') !!}
                        <input type="text" class="form-control" ng-model="lastname"/>
                        <span ng-bind="lastname" class="text-info"></span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('education','Education') !!}
                        <input type="text" class="form-control" ng-model="education"/>
                        <span ng-bind="education" class="text-info"></span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('position','Position') !!}
                        <input type="text" class="form-control" ng-model="position"/>
                        <span ng-bind="position" class="text-info"></span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('salary','Salary') !!}
                        <input type="text" class="form-control" ng-model="salary"/>
                        <span ng-bind="salary" class="text-info"></span>
                    </div>

                    <div class="form-group">
                        {!! Form::label('contact_number','Contact Number') !!}
                        <input type="text" class="form-control" ng-model="contact_number"/>
                        <span ng-bind="contact_number" class="text-info"></span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-danger">Cancel</button>
                        <input type="submit" class="btn btn-primary" name="insert" ng-click="insert()" ng-model="btnName" value="@{{ btnName }}"/>
                    <br/>
                        <span class="alert-info h4" ng-if="data!=null" ng-bind="data">

                        </span>

                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <h3>Employee Lists</h3>
                <table class="table table-condensed table-striped">
                    <tr>
                        <th>Employee ID</th>
                        <th>FUll Name</th>
                        <th>Email Address</th>
                        <th>Position</th>
                    </tr>
                   {{-- <tr ng-bind="x in employees">
                        <td ng-bind="x.firstname"></td>
                    </tr>--}}
                </table>
            </div>
        </div>


    </div>


    </body>
</html>
