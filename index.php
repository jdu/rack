<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>RACK</title>
    <link rel="stylesheet" href="assets/css/foundation.css"/>
    <script type="text/javascript" src="assets/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="assets/js/foundation.min.js"></script>
    <script src="assets/js/vendor/modernizr.js"></script>

    <style>
        #header {
            background: #333;
            color: #FFF;
            padding: 10px;
            margin-bottom: 25px;
        }

        #header h2 {
            color: #FFF;
            font-weight: bold;
            letter-spacing: 0.05em;
        }

        table tr td {
            vertical-align: top;
        }

        dl {

        }
    </style>

    <script type="text/javascript">
        $(document).ready(function(e){
            $("#btn-php-spec").on("click", function(){
                $.getJSON("php-api/SpecRunner.php?action=test", function(data){
                    $('#test-result').text(data.data);
                    $('#content-holder').foundation('reveal', 'open');
                })
            })
        });

         $(document).ready(function(e){
            $("#btn-python-spec").on("click", function(){
                $.get("data-api/SpecRunner.php",
                 {
                    action: "test"
                 },
                 function(){
                    console.log(arguments);
                })
            });

            $('#selenium-runner').on("click", function(){
                $.get("client-side/SpecRunner.php",
                     {
                        action: "test"
                     },
                     function(){
                        console.log(arguments);
                     }
                 );
            });
        })
    </script>
</head>
<body>

<div id="header">
    <h2>RACK</h2>
</div>

<div class="row">
<p>Welcome to The Rack, this tool is used for running the various tests required to ensure that the Twine applications meet minimum quality standards and are stable enough for deployment to staging and production environments.</p>

</div>

<div class="row">


    <dl class="tabs vertical" data-tab>
        <dd class="active"><a href="#client-rack">Client</a></dd>
        <dd><a href="#php-rack">PHP</a></dd>
        <dd><a href="#php-api-rack">PHP API</a></dd>
        <dd><a href="#data-api-rack">Data API</a></dd>
        <!--
        <dd><a href="#instances-rack">Instances</a></dd>
        <dd><a href="#resources">Resources</a></dd>
        -->
    </dl>

    <div class="tabs-content vertical">
        <!-- Client-Side Rack Content -->
        <div class="content active" id="client-rack">
            <h3>Client</h3>

            <table width="100%">
                <thead>
                <tr>
                    <th>Runner</th>
                    <th>Result</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mocha (Unit Tests)</td>
                    <td>
                        <a href="client-side/views/mocha.html" class="button small">Run/View</a>
                    </td>

                </tr>
                <tr>
                    <td>Kitchen Sink (HTML/CSS)</td>
                    <td>
                        <a href="client-side/views/sink.php" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Kitchen Sink (UI Components)</td>
                    <td>
                        <a href="client-side/views/sink_components.html" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Kitchen Sink (HTML/CSS)</td>
                    <td>
                        <a href="client-side/views/sink.php" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Kitchen Sink (UI Components)</td>
                    <td>
                        <a href="client-side/views/sink_components.html" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Forms</td>
                    <td><a href="client-side/views/forms.html" class="button small">View</a></td>
                </tr>
                <!--
                <tr>
                    <td>Selenium (Functional/Automated User)</td>
                    <td>
                        <button class="button small" id="specrunner-selenium">Run</button>
                        <a href="client-side/build/selenium_results.html" class="button small">View</a>
                    </td>
                </tr>
                -->
                </tbody>
            </table>
        </div>

        <!-- PHP Unit Testing, etc... Rack -->
        <div class="content" id="php-rack">
            <h3>PHP Rack</h3>

            <table width="100%">
                <thead>
                <tr>
                    <th>Runner</th>
                    <th>Result</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Default</td>
                    <td>
                        <a id="btn-php-spec" href="#" class="button small">Run</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- PHP API Rack Tests -->
        <div class="content" id="php-api-rack">
            <h3>PHP API Rack</h3>
            <table width="100%">
                <thead>
                <tr>
                    <th>Runner</th>
                    <th>Result</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><strong>Default</strong></td>
                    <td>
                        <p>Make sure that you have logged into the application before attempting to run these tests.</p>
                        <div class="panel">
                        <form method="GET" action="php-api/api-tests/index.php">

                            <label>Package</label>
                            <select name="package">
                                <option>-- Select a Package</option>
                                <option value="admin">admin</option>
                                <option value="analytics">analytics</option>
                                <option value="collections">collections</option>
                                <option value="comments">comments</option>
                                <option value="dashboard">dashboard</option>
                                <option value="data">data</option>
                                <option value="dataentry">dataentry</option>
                                <option value="exchange">exchange</option>
                                <option value="export">export</option>
                                <option value="files">files</option>
                                <option value="indicators">indicators</option>
                                <option value="locations">locations</option>
                                <option value="maintenance">maintenance</option>
                                <option value="notifications">notifications</option>
                                <option value="partners">partners</option>
                                <option value="reports">reports</option>
                                <option value="review">review</option>
                                <option value="services">services</option>
                                <option value="tools">tools</option>
                                <option value="users">users</option>
                            </select>

                            <label>Test Level</label>
                            <select name="level">
                                <option>-- Test Level --</option>
                                <option value="0">-- Non-Data APIs --</option>
                                <option value="1">-- All APIs --</option>
                            </select>

                            <input type="submit" class="button small" value="Run Tests"/>
                        </form>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!-- Python Rack Tests -->
        <div class="content" id="data-api-rack">
            <h3>Data API Rack</h3>

            <p>Tests can take some time to run, if you get a 404 accessing the result below, just refresh until it's avialable.</p>

            <a id="btn-python-spec" href="#" class="button small">Run</a>

            <table width="100%">
                <thead>
                <tr>
                    <th>Runner</th>
                    <th>Result</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Unit Tests</td>
                    <td><a href="data-api/build/xunit.xml" class="button small">View</a></td>
                </tr>
                <tr>
                    <td>PEP8 Style Check</td>
                    <td>
                        <a href="data-api/build/pep8.log" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Nose Tests</td>
                    <td>
                        <a href="data-api/build/pep8.log" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>Coverage Report</td>
                    <td>
                        <a href="data-api/build/coverage.xml" class="button small">View</a>
                    </td>
                </tr>
                <tr>
                    <td>PyLint Report</td>
                    <td>
                        <a href="data-api/build/pylint.out" class="button small">View</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <!--
        <div class="content" id="instances-rack">
            <h3>Instance Testing</h3>

            <hr />
            <h4>UNHCR Instance</h4>
            <div class="panel">
                <button class="button small">Run</button>
                <dl>
                    <dt><a href="#">JSON Test Results</a></dt>
                    <dd>Shows any errors with JSON parsing</dd>
                </dl>
            </div>

            <hr />
            <h4>WHO Instance</h4>
            <div class="panel">
                <button class="button small">Run</button>
                <dl>
                    <dt><a href="#">JSON Test Results</a></dt>
                    <dd>Shows any errors with JSON parsing</dd>
                </dl>
            </div>

            <hr />
            <h4>WRA Instance</h4>
            <div class="panel">
                <button class="button small">Run</button>
                <dl>
                    <dt><a href="#">JSON Test Results</a></dt>
                    <dd>Shows any errors with JSON parsing</dd>
                </dl>
            </div>

            <hr />
            <h4>IFRC Instance</h4>
            <div class="panel">
                <button class="button small">Run</button>
                <dl>
                    <dt><a href="#">JSON Test Results</a></dt>
                    <dd>Shows any errors with JSON parsing</dd>
                </dl>
            </div>
        </div>

        <div class="content" id="resources-rack">
            <h3>Resources</h3>
        </div>
        -->
    </div>


</div>


<hr/>

<div class="row">
    <div class="small-12 columns">
        <p>All Content &copy; Copyright Jeff Uren 2014. All Rights Reserved.</p>
    </div>
</div>


<div id="content-holder" class="reveal-modal" data-reveal>
    <pre id="test-result"></pre>
  <a class="close-reveal-modal">&#215;</a>
</div>

<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>
