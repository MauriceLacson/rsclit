@extends('layouts.app')

@section('content')

<div id="formDiv" class="form-group">
        
            <form id="form1" class="" method="post" action="">
                <div>
                    <label for="machine_no"><span class="labelSpan">Machine No.</span>
                    </label>
                    <input id="machine_no" name="machine_no" class="form-control" type="text" placeholder=""><br>
                </div>
                
                <div>
                    <label for="model_no"><span class="labelSpan">Model No.</span>
                    </label>
                    <input id="model_no" name="model_no" class="form-control" type="text" placeholder=""><br>
                </div>
                
                <div>
                    <label for="package"><span class="labelSpan">Package</span>
                    </label>
                    <input id="package" name="package" class="form-control" type="text" placeholder=""><br>
                </div>

                <div>
                    <label for="date_last_rsclit"><span class="labelSpan">Date Last Routine SCLIT</span>
                    </label>
                    <input id="date_last_rsclit" name="date_last_rsclit" class="form-control" type="date" placeholder=""><br>
                </div>
                
                <div>
                    <label for="date_performed"><span class="labelSpan">Date Performed</span>
                    </label>
                    <input id="date_performed" name="date_performed" class="form-control" type="date" placeholder=""><br>
                </div>
                
                <div>
                    <label for="work_week"><span class="labelSpan">Work Week</span>
                    </label>
                    <input id="work_week" name="work_week" class="form-control" type="text" placeholder=""><br>
                </div>
                <button id="submitBtn" class="btn btn-primary" type="submit">submit</button>
            </form>
        </div>
@endsection
