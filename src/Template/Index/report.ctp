<div class="container">
    <h2 class="display-4 text-center pt-3">Export Survey Response</h2>
    <p class="lead text-center">Please select the date range to export the survey data</p>
    <form method="post" action="/export">
        <div class="row">
            <div class="col-sm">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">From</span>
                    </div>
                    <input type="text" name="from" class="form-control datePicker" data-format="Y-m-d" data-theme="survey-template" data-large-mode="true" data-large-default="true" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
            <div class="col-sm">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">To</span>
                    </div>
                    <input type="text" name="to" class="form-control datePicker" data-format="Y-m-d" data-theme="survey-template" data-large-mode="true" data-large-default="true" aria-label="Amount (to the nearest dollar)">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <button type="submit" class="btn btn-primary btn-block">Export Report</button>
            </div>
        </div>
    </form>
</div>