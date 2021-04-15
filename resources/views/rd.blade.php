<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recurring Deposit Calculator</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

</head>
<body class="antialiased">
    <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    
        @include('header')
        <div class="max-w-6xl mx-auto mt-8 sm:px-6 lg:px-8"> 
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mx-4">
                   <h2><strong>Recurring Deposit Calculator</strong></h2>
            </div>                                    
            <div class="mt-8 mx-4  bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                    <!-- <div class="card-header bg-primary text-white text-center font-weight-bold">
                        <h3>Return Deposit Calculator</h3>
                    </div> -->

                    <form class="p-4 row" id="form" >
                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="investment" class="form-label">MONTHLY INVESTMENT</label>
                            <input type="number" id="investment" value="10000" class="form-control" id="investment">
                        </div>

                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="return_rate" class="form-label">EXPECTED RETURN RATE</label>
                            <input type="number" id="return_rate" value="7" class="form-control" id="return_rate">
                        </div>

                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                            <label for="time" class="form-label">TIME FRAME (IN MONTHS)</label>
                            <input type="number" id="time" value="7" class="form-control" >
                        </div>
                        <div class="mb-3 col-12 col-lg-3 col-md-6 col-sm-12">
                                <label for="exampleInputEmail1" class="form-label">CHOOSE OPTION</label>
                                <select class="form-select" name="opt" id="opt" aria-label="Default select example">
                                    <option value=12>Monthly</option>
                                    <option value=4>Quarterly</option>
                                    <option value=2>Half yearly</option>
                                    <option value=1>Yearly</option>
                                </select>
                        </div>
                        <div class="m-3">
                            <button type="submit" class="btn btn-success" id="button">Calculate</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="mx-auto mt-4">
                <table class="table table-bordered calculate hidden">
                    <tr>
                        <th>Invested Amount</th>
                        <th class="a">&#8377; </th>
                    </tr>
                    <tr>
                        <th>Est. Returns</th>
                         <th class="b">&#8377; </th>
                    </tr>
                    <tr>
                        <th>Total Value</th>
                        <th class="c">&#8377; </th>
                    </tr>                                                      
                </table>
            </div>        
            <br>
            <div class="mt-8 mx-16 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="card">
                    <h5 class="card-header bg-primary font-weight-bold text-white text-center">What is a Recurring Deposit Calculator?</h5>     
                </div> 
                <div class="relative items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 font-weight-bold"> 
                <p>Recurring Deposits are an investment tool which allows investors to make regular monthly payments and save money for the long term. 
            Investors can choose the tenure of the deposit and the minimum monthly payment they wish to make according to their convenience. 
            RD schemes are generally more flexible than FD schemes and are generally preferred by those who want to 
            start an account for the purpose of saving money and building a rainy-day fund. </p>

            <p>Like FD, investing in an RD also qualifies for taxation. 
            For the money invested in a recurring deposit, tax is deducted at source, i.e. TDS. 
            This tax is levied @ 10% p.a. if the deposit amounts to more than Rs. 40,000. 
            It should be noted that it is the interest earned on RD that is taxable and not the full maturity amount. 
            Investors with no taxable income must submit Form 15G to avoid TDS on both recurring deposits and fixed deposits. </p>

            <p>
                Few of the benefits of RD includes–
                <ul>
                    <li>RD can be used as collateral for taking loans. You can take up to 80-90% loans on your RD amount</li>
                    <li>Premature withdrawals are allowed under RD. However, this may come with a small penalty</li>
                    <li>RD schemes allow for higher rate of interest (usually 0.5% more) for senior citizens</li>
                    <li>RD schemes allow you to save money on a regular basis and the minimum deposit amount can be as low as RS. 10</li>
                    <li>The tenure is also flexible and you can choose from 7 days to 10 years depending on your convenience</li>
                </ul>
            </p>
            <p>&nbsp;</p>
        </div>
        
        <div class="card-header bg-primary font-weight-bold text-white text-center">
            <h3>Highest RD Rates Offered by Various Banks in India (2020)</h3>
        </div>
        <br>
        <table align="center" style="text-align: center;" border="1" width="75%">
        <tbody>
            <tr>
            <td style="background-color: #2a5e99;" colspan="4" width="216"><strong><span style="color: #ffffff;">RD Interest Rates (per annum)</span></strong></td>
            </tr>
            <tr>
            <td style="background-color: #2a5e99;" width="216"><strong><span style="color: #ffffff;">Bank Name</span></strong></td>
            <td style="background-color: #2a5e99;" width="126"><strong><span style="color: #ffffff;">Regular Customers</span></strong></td>
            <td style="background-color: #2a5e99;" width="126"><strong><span style="color: #ffffff;">Senior Citizens</span></strong></td>
            <td style="background-color: #2a5e99;" width="189"><strong><span style="color: #ffffff;">Tenure</span></strong></td>
            </tr>
            <tr>
            <td width="216">Utkarsh Small Finance Bank</td>
            <td width="126">8.00%</td>
            <td width="126">8.50%</td>
            <td width="189">24 months to 36 months</td>
            </tr>
            <tr>
            <td width="216">Fincare Small Finance Bank</td>
            <td width="126">7.50%</td>
            <td width="126">7.50%</td>
            <td width="189">36 months 1 day to 42 months</td>
            </tr>
            <tr>
            <td width="216">Suryoday Small Finance Bank</td>
            <td width="126">7.50%</td>
            <td width="126">8.00%</td>
            <td width="189">5 years</td>
            </tr>
            <tr>
            <td width="216">Jana Small Finance Bank</td>
            <td width="126">7.50%</td>
            <td width="126">8.00%</td>
            <td width="189">36 months</td>
            </tr>
            <tr>
            <td width="216">Ujjivan Small Finance Bank</td>
            <td width="126">6.50%</td>
            <td width="126">7.00%</td>
            <td width="189">12 months to 24 months</td>
            </tr>
            <tr>
            <td width="216">Equitas Small Finance Bank</td>
            <td width="126">7.15%</td>
            <td width="126">7.75%</td>
            <td width="189">30/36 months</td>
            </tr>
            <tr>
            <td width="216">IndusInd First Bank</td>
            <td width="126">7.00%</td>
            <td width="126">7.50%</td>
            <td width="189">12 months to 33 months</td>
            </tr>
            <tr>
            <td width="216">Yes Bank</td>
            <td width="126">7.00%</td>
            <td width="126">7.50%</td>
            <td width="189">12 months to 33 months</td>
            </tr>
            <tr>
            <td width="216">HDFC Bank</td>
            <td width="126">5.50%</td>
            <td width="126">6.00%</td>
            <td width="189">90/120 months</td>
            </tr>
            <tr>
            <td width="216">Axis Bank</td>
            <td width="126">5.50%</td>
            <td width="126">6.00%</td>
            <td width="189">5 years to 10 years</td>
            </tr>
            <tr>
            <td width="216">SBI Bank</td>
            <td width="126">5.40%</td>
            <td width="126">5.90%</td>
            <td width="189">5 years to 10 years</td>
            </tr>
        </tbody>
        </table>
        <br>
        <p style="text-align: justify;"><em>Interest rates updated on 16th September 2020. Source: Bank Websites.
            Higher rates are available to senior citizens, usually 0.50% more than the standard rates.</em></p>

                    <br>
                </div>
            </div>
            <br>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#form").submit(function(e){
                e.preventDefault();
                calculateReturns();
            });

            $("input").keyup(function(e){
                e.preventDefault();
                calculateReturns();
            });

            function calculateReturns(){
                document.getElementById("button").addEventListener("click", function() {
                    console.log("Calculating..");

                    $('.a').empty();
                    $('.b').empty();
                    $('.c').empty();
                    var investments = document.getElementById("investment").value;
                    var annualRate  = document.getElementById("return_rate").value;
                    var time = document.getElementById("time").value;
                    var freq = document.getElementById("opt").value;
                    var m=0.0;
                    var est_rtn = 0.0
                    var total = investments*time;
                    console.log(total);
                    var i;
                    for(i=1;i<=time;i++)
                    {
                       // $m = $m + ($P*pow((1+(($r/100)/$freq)),$freq*($t-$i+1)/12));
                       m = m +  (investments*Math.pow((1+((annualRate/100)/freq)),freq*(time-i+1)/12));
                    }

                    est_rtn = (m-investments).toFixed(2);
                    $('.calculate').show();
                    $('.a').append("<p>&#8377;"+total+"</p>");
                    $('.b').append("<p>&#8377;"+est_rtn+"</p>");
                    $('.c').append("<p>&#8377;"+m.toFixed(2)+"</p>");
                   
                });
            }
        });

    </script> 
@include('footer')

</body>
</html>
