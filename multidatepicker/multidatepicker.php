<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <link href="multidatepicker.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="multidatespicker.js" type="text/javascript"></script>

</head>
<body>
    <div style="width: 22%;margin:20px;">
        <input type="text" id="selectedValues" class="date-values" readonly/>
        <div id="parent" class="container" style="display:none;">
            <div class="row header-row">
                <div class="col-xs previous">
                    <a href="#" id="previous" onclick="previous()">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="card-header month-selected col-sm" id="monthAndYear">
                </div>
                <div class="col-sm">
                    <select class="form-control col-xs-6" name="month" id="month" onchange="change()"></select>
                </div>
                <div class="col-sm">
                    <select class="form-control col-xs-6" name="year" id="year" onchange="change()"></select>
                </div>
                <div class="col-xs next">
                    <a href="#" id="next" onclick="next()">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <table id="calendar">
                <thead>
                    <tr>
                        <th>S</th>
                        <th>M</th>
                        <th>T</th>
                        <th>W</th>
                        <th>T</th>
                        <th>F</th>
                        <th>S</th>
                    </tr>
                </thead>
                <tbody id="calendarBody"></tbody>
            </table>
        </div>
    </div>
</body>
</html>

