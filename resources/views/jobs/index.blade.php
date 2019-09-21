<!DOCTYPE html>
<!-- saved from url=(0024)https://jobs.github.com/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>GitHub Jobs
    </title>

    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token"
          content="14ahktYDQ+BWTWUKkd1dTyajjaTfYjudsU6kKfM6++postQciGD6KhM3VCrz1VH2mESKKq9Pupz2KHVrxRYJuA==">
    <meta name="csp-nonce" content="1gO7HNi191aBBiFq11IUdw==">


    <link rel="stylesheet" media="all"
          href="https://jobs.github.com/assets/application-8a0cea4b3c1077a7417cbdcfe673a88324c7ba0eebeed02e897c67742f3632d7.css">
    <script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script>
    <script src="https://jobs.github.com/assets/application-40ba4d0118ad54eb344384b7a0cbdd238ef0a112544d83225291ae5586e3d1ed.js"></script>

</head>

<body>

<div class="non-footer">
    <div id="header">
        <div id="wrap">
            <h2 id="logo">
                <a href="https://jobs.github.com/">GitHub Jobs</a>
            </h2>

            <ul id="gnav">
                <li><a href="https://jobs.github.com/positions">All jobs</a></li>
                <li><a href="https://jobs.github.com/post">Post a job</a></li>
                <li><a href="https://jobs.github.com/faq">How it works</a></li>
            </ul>
        </div>
    </div>

    <div id="wrap">


        <div id="search" class="clearfix">

            <form class="positions" action="{{route('job.index')}}" accept-charset="UTF-8" method="get">
                <input name="utf8" type="hidden" value="✓">

                <div class="bucket description">
                    <h3>Job Description</h3>

                    <div class="field">
                        <input type="text" name="description" id="description_field"
                               placeholder="Filter by title, benefits, companies, expertise" autocomplete="off">
                    </div>
                </div>

                <div class="bucket location">
                    <h3>Location</h3>

                    <div class="field">
                        <input type="text" name="location" id="location_field"
                               placeholder="Filter by city, state, zip code or country" autocomplete="off">
                    </div>
                </div>

                <div class="bucket fulltime">
                    <label class="simplefield">
                        <input type="checkbox" name="full_time" id="full_time_field" value="on">
                        Full Time Only
                    </label>
                </div>

                <button type="submit">Search</button>

            </form>
        </div>


        <div id="page">
            <div class="inner">

                <h1>Featured Jobs</h1>

                <div class="columns generic">
                    <div class="column main">
                        <section>
                            <table class="positionlist">
                                <tbody>
                                @foreach($jobs as $job)
                                    <tr class="job">
                                        <td class="title">
                                            <h4>
                                                <a href="https://jobs.github.com/positions/9e4129d5-6586-462a-b006-983e7f271fbf">{{ $job->title }}</a></h4>
                                            <p class="source">
                                                <a class="company" href="https://jobs.github.com/companies/king">{{ $job->company }}</a>
                                                –
                                                <strong class="fulltime">{{ $job->type }}</strong>
                                            </p>
                                        </td>

                                        <td class="meta">
                                            <span class="location">London, UK</span>
                                            <span class="when relatize relatized">30 days ago</span>
                                        </td>
                                    </tr>
                                @endforeach


{{--                                <tr>--}}
{{--                                    <td class="title more-link" colspan="2">--}}
{{--                                        <h4><a href="https://jobs.github.com/positions">More Awesome Jobs →</a></h4>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}


                                </tbody>
                            </table>
                        </section>

                    </div>

                    <div class="column sidebar">
                        <a class="tweet" href="https://twitter.com/GitHubJobs">Follow GitHub Jobs on Twitter</a>

                        <div class="module logo">
                            <div class="inner">
                                <h2>Featured Company</h2>

                                <div class="logo">
                                    <a target="_blank" href="https://jobs.github.com/companies/nexient">
                                        <img src="./GitHub Jobs_files/1.png">
                                    </a>
                                </div>

                                <a href="https://jobs.github.com/companies/nexient">4 jobs at Nexient</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </div>
</div>

<div id="footer">
    <div class="inner">
        <ul class="github-nav">
            <li><a href="https://github.com/blog" class="blog">The GitHub Blog</a></li>
            <li><a href="https://github.com/contact">Contact</a></li>
            <li><a href="https://jobs.github.com/api">API</a></li>
        </ul>

        <p class="copyline">
            © 2019 GitHub Inc. All rights reserved.
        </p>

        <a href="https://github.com/">
            <img width="24" height="24" class="invertocat" src="./GitHub Jobs_files/invertocat.png">
        </a>

        <!-- Environment: production -->
    </div>
</div>

<div id="facebox" class="popup d-none">
    <div id="facebox_overlay" class="js-close-modal facebox_overlayBG"></div>
    <div class="js-modal-contents"></div>
</div>


</body>
</html>
