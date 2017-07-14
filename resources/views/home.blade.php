@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div id="formDiv" class="form-group">
        
            <form id="form1" class="">
                <div>
                    <label for="machineNum"><span class="labelSpan">Machine No.</span>
                    </label>
                    <input id="machineNum" name="machineNum" class="form-control" type="text" placeholder=""><br>
                </div>
                
                <div>
                    <label for="model"><span class="labelSpan">Model No.</span>
                    </label>
                    <input id="model" name="model" class="form-control" type="text" placeholder=""><br>
                </div>
                
                <div>
                    <label for="package"><span class="labelSpan">Package</span>
                    </label>
                    <input id="package" name="package" class="form-control" type="text" placeholder=""><br>
                </div>

                <div>
                    <label for="dlrSCLIT"><span class="labelSpan">Date Last Routine SCLIT</span>
                    </label>
                    <input id="dlrSCLIT" name="dlrSCLIT" class="form-control" type="date" placeholder=""><br>
                </div>
                
                <div>
                    <label for="datePerf"><span class="labelSpan">Date Performed</span>
                    </label>
                    <input id="datePerf" name="datePerf" class="form-control" type="date" placeholder=""><br>
                </div>
                
                <div>
                    <label for="workWeek"><span class="labelSpan">Work Week</span>
                    </label>
                    <input id="workWeek" name="workWeek" class="form-control" type="text" placeholder=""><br>
                </div>
                <button id="submitBtn" class="btn btn-primary" type="submit">submit</button>
            </form>
        </div>
@endsection
