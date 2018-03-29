<?php
$lockdown = 1;
include_once('functions.php');


?>
<!doctype html>
<html>
<head>
    <title>Climate Explorer</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/resources/css/ol3-popup.css">

    <link rel="stylesheet" href="/resources/css/sweetalert.css">

    <link rel="stylesheet" media="screen" href="/resources/css/screen.css">
    <link rel="stylesheet" media="screen" href="/resources/css/mods.css">

    <script type="text/javascript" src="/resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="/resources/js/jquery-ui.min.js"></script>

    <?php

    $share_data['url'] = current_URL();
    $share_data['title'] = 'About Climate Explorer';

    echo opengraph_output($share_data);

    ?>

</head>

<body id="page-about" class="page-type-text">
<div class="cd-cover-layer"></div>
<?php include_once('template/header.php'); ?>

<div id="viewport">
    <div id="main-content-wrap">

        <?php include_once('template/share.php'); ?>

        <section id="standard-splash" class="page-splash">
            <div class="splash-text">
                <h1>About Climate Explorer</h1>
            </div>
        </section>

        <section id="standard-body" class="page-text">

            <p>
                Individuals, businesses, and communities of all sizes can use the Climate Explorer to understand how climate conditions in their location may change over coming decades. This information—derived from global climate models—can help them make decisions and build resilience to extreme events. </p>
            <p>
                Built to accompany the U.S. Climate Resilience Toolkit, the Climate Explorer offers customizable graphs and maps of observed and projected temperature, precipitation, and related climate variables for every county in the contiguous United States. </p>
            <p>
                Based on global climate models developed for the United Nations Intergovernmental Panel on Climate Change, Climate Explorer's graphs and maps show projected conditions for two possible futures: one in which humans reduce and stabilize global emissions of heat-trapping gases (labeled Lower emissions), and one in which we continue increasing emissions through the 21st century (labeled Higher emissions). Decision makers can compare climate projections based on these two plausible futures, and plan according to their tolerance for risk and the timeframe of their decisions. </p>
            <p>
                The tool also displays observations of temperature, precipitation, and related variables from 1950 to 2013. These are averages calculated from quality-checked ground-based weather stations across the country. Users can compare graphs of observed conditions to climate model simulations (hindcasts, or 'projections' generated for the past) for the same period. Comparing the range of observations to the simulations can provide insights on the models' collective ability to predict the future. For temperature variables, simulations and observations generally show a good match. For other variables—especially precipitation-related variables—comparisons reveal consistent biases or limitations of the models. </p>
            <p>

            <hr>
            </p><h2>About the tool</h2>

            <p>
                The Climate Explorer is a web application offering interactive maps and graphs to assist users in decision-making and resilience-building contexts. Built to support the <a href="https://toolkit.climate.gov/">U.S. Climate Resilience Toolkit</a>, the Climate Explorer helps people explore the exposure of human populations and valued assets to climate-related hazards that may put those assets at risk. </p>
            <p>
                The Climate Explorer was programmed in <a href="http://openlayers.org/">OpenLayers 3</a> by <a href="http://habitatseven.com/">HabitatSeven</a>, based on the original Climate Explorer and <a href="http://multigraph.org/">MultiGraph</a> tools, which were developed by <a href="https://nemac.unca.edu/">NEMAC</a> at UNC-Asheville. Please direct comments to <a href="mailto:noaa.toolkit@noaa.gov">noaa.toolkit@noaa.gov</a>. </p>
            <p>

            <hr>
            </p><h2>About the data</h2>

            <h3>Observations</h3>

            <p>
                Graphs and maps for 1950 through 2013 show averages of observations recorded at individual climate / weather stations. Station data for temperature and precipitation have been interpolated and stored as a gridded observational dataset prepared by Livneh et al. (2013, 2015). This dataset is also used to calculate observed differences from averages for the period 1961-1990. Data are <a href="https://catalog.data.gov/dataset/a-spatially-comprehensive-hydrologic-model-based-data-set-for-mexico-the-u-s-and-sout-1950-2013">available via Data.gov</a>. </p>
            <h3>Modeled (Historical) and Projected Data</h3>

            <p>
                Graphs in Climate Explorer show results generated by global climate models for the Coupled Model Intercomparison Project Phase 5 (CMIP5). The climate model data were statistically downscaled using the Localized Constructed Analogs method (<a href="http://loca.ucsd.edu/">LOCA</a>; Pierce et al. 2014). </p>
            <p>
                For the historical period, graphs show observed values from a gridded dataset (Livneh et al. 2013, 2015). For projected climate conditions, we present summaries for two potential futures derived from LOCA statistically downscaled data, obtained through the <a href="http://www.rcc-acis.org/docs_webservices.html">ACIS webservice</a>. The two potential futures are labeled Lower emissions and Higher emissions; they represent scenarios RCP 4.5 and RCP 8.5, respectively. <a href="https://www.sei-international.org/mediamanager/documents/A-guide-to-RCPs.pdf" target="_blank">Learn more about Representative Concentration Pathways (RCPs) »</a>
            </p>
            <p>
                To produce maps of Mean Daily Maximum and Mean Daily Minimum Temperature for 1950 to 2010, we calculated decadal averages for each month of the year using the Livneh observational dataset. For the 2020s to the 2090s, we used weighted averages of all 32 models to calculate average projected values. </p>
            <p>
                To produce maps of Percent Change in Precipitation, we first calculated monthly averages of Total Precipitation for the period 1961-1990 (we refer to these values as the 30-year climatology). For January, April, July, and October—the middle month of each season—we calculated 10-year averages of Total Precipitation for the 1950s through the 2000s, and subtracted the appropriate monthly climatology from them. We divided the difference by the climatology, and then multiplied the result by 100. For future decades, we used the weighted mean of the 32 models in the LOCA dataset to calculate decadal averages for each of the four representative months, and followed the procedure above to calculate percent change relative to the 30-year climatology. </p>
            <p>
                For graphs and maps of Days over 90, 95, 100, and 105ºF, Days with minimums or maximums under 32ºF, Days with minimums over 80 and 90°F, Heating Degree Days, Cooling Degree Days, Growing Degree Days, Modified Growing Degree Days, all data are presented as average annual values across a decade with the starting year indicated in the time slider. </p>
            <p>
                Days with High Tide Flooding were compiled from tide-gauge data based on locally identified thresholds related to impacts such as flooding of low-lying roads. </p>
            <h3>Stations</h3>

            <p>
                Temperature and precipitation observations and Climate Normals displayed in graphs for individual stations are from the <a href="http://www.ncdc.noaa.gov/oa/climate/ghcn-daily/index.php">Global Historical Climatology Network-Daily (GHCN-D)</a> database. These data are accessed via the NOAA Regional Climate Centers' Applied Climate Information System (ACIS). </p>
            <p>
                Historical observations and future projections of coastal high tide flooding was provided by William Sweet, NOAA National Ocean Service. </p>
            <h3>Credits & Acknowledgments</h3>

            <p>
                The U.S. Climate Resilience Toolkit and Climate Explorer are managed by NOAA's Climate Program Office, and hosted by NOAA's National Centers for Environmental Information (NCEI-Asheville). </p>
            <p>
                Development of this version of the Climate Explorer was directed and overseen by an interagency team of federal climate model experts, chaired by the U.S. Global Change Research Program. Federal agencies that partnered in this effort are the Environmental Protection Agency (EPA), NASA, NOAA, and the U.S. Geological Survey (team members identified below). </p>
            <p>
                Design and programming of the Climate Explorer were completed by HabitatSeven, FernLeaf Interactive, and the National Environmental Modeling and Analysis Center (NEMAC), at UNC-Asheville. </p>
            <p>
                Production and processing of the LOCA climate projection data was done through a collaborative effort supported by NCEI-Asheville, NEMAC, and the Northeast Regional Climate Center, at Cornell University. Jay Alder (USGS) designed the color palettes and plotted data ranges for the interactive maps, and created future minus present difference maps for the 'precipitation' and 'number of dry days' variables. </p>
            <h3>
                Interagency Climate Projection Team Members </h3>
            <ul>

                <li>Fred Lipschultz, Chair, contractor to U.S. Global Change Research Program</li>
                <li>Jay Alder, U.S. Geological Survey</li>
                <li>Art DeGaetano, NOAA Northeast Regional Climate Center</li>
                <li>Forrest Melton, NASA Ames Research Center Cooperative for Research in Earth Science and Technology / California State University Monterey Bay</li>
                <li>Phil Morefield, U.S. Environmental Protection Agency</li>
                <li>Andrea Ray, NOAA Earth System Research Laboratory</li>
                <li>Liqiang Sun, NOAA National Centers for Environmental Information</li>
                <li>William Sweet, NOAA National Ocean Service</li>
            </ul>

            <h3>U.S. Climate Resilience Toolkit Program Management</h3>

            <ul>

                <li>David Herring, program manager, NOAA Climate Program Office</li>
                <li>LuAnn Dahlman, managing editor, contractor to NOAA Climate Program Office</li>
                <li>Ned Gardiner, public engagement manager, contractor to NOAA Climate Program Office</li>
                <li>Larry Belcher, programmer, contractor to NOAA Climate Program Office</li>
            </ul>

            <h3>Design, Programming & Development</h3>

            <ul>

                <li>Jamie Herring, president & lead designer, HabitatSeven</li>
                <li>Jordan Harding, chief technology officer, HabitatSeven</li>
                <li>Brendan Heberton, application architect, HabitatSeven</li>
                <li>Wesley Bowman, data developer, HabitatSeven</li>
                <li>Aires Almeida, chief creative officer, HabitatSeven</li>
                <li>Phil Evans, senior designer, HabitatSeven</li>
                <li>James Fox, director & product manager, NEMAC</li>
                <li>Ian Johnson, geospatial technician, NEMAC</li>
                <li>Jeff Hicks, director & programmer, Fernleaf Interactive</li>
                <li>Josh Wilson, programmer, Fernleaf Interactive</li>
                <li>Bill Noon, application programmer, Cornell University</li>
            </ul>

            <h3>Thanks also to reviewers:</h3>

            <ul>

                <li>Daniel Cayan, climate modeler, Scripps Institution of Oceanography</li>
                <li>Keith Dixon, climate modeler, NOAA Geophysical Fluid Dynamics Laboratory</li>
                <li>Katherine Hayhoe, climate modeler, Texas Tech University</li>
                <li>Ken Kunkel, climate modeler, NOAA National Centers for Environmental Information</li>
            </ul>

            <p>

            <hr>
            </p><h2>References</h2>

            <ul>

                <li>Livneh, B., E. A. Rosenberg, C. Lin, B. Nijssen, V. Mishra, K. M. Andreadis, E. P. Maurer, and D. P. Lettenmaier (2013), A long-term hydrologically based dataset of land surface fluxes and states for the conterminous United States: Update and extensions, <em>J. Clim.</em>, 26(23), 9384–9392, doi <a href="http://dx.doi.org/10.1175/JCLI-D-12-00508.1">10.1175/JCLI-D-12-00508.1</a>.</li>
                <li>Livneh, B., Bohn, T.J., Pierce, D.W., Munoz-Arriola, F., Nijssen, B., Vose, R., Brekke, L. 2015. A spatially comprehensive, hydrometeorological data set for Mexico, the U.S., and Southern Canada 1950–2013. <em>Scientific Data</em> 2:150042. doi: <a href="http://dx.doi.org/10.1038/sdata.2015.42">10.1038/sdata.2015.42</a>.</li>
                <li>Pierce, D. W., D. R. Cayan, and B. L. Thrasher, 2014:<strong> </strong>Statistical Downscaling Using Localized Constructed Analogs (LOCA). <em>Journal of Hydrometeorology</em>, volume 15, 2558-2585. doi: <a href="https://doi.org/10.1175/JHM-D-14-0082.1">10.1175/JHM-D-14-0082.1</a>.</li>
                <li>Sanderson, B.M. and M.F. Wehner, 2017: Model weighting strategy. In: Climate Science Special Report: Fourth National Climate Assessment, Volume I [Wuebbles, D.J., D.W. Fahey, K.A. Hibbard, D.J. Dokken, B.C. Stewart, and T.K. Maycock (eds.)]. U.S. Global Change Research Program, Washington, DC, USA, pp. 436-442, doi: <a href="http://dx.doi.org/10.7930/J06T0JS3">10.7930/J06T0JS3</a>.</li>
                <li>Taylor, K.E., R.J. Stouffer, and G.A. Meehl, 2012: An Overview of CMIP5 and the Experiment Design<a href="http://journals.ametsoc.org/doi/abs/10.1175/BAMS-D-11-00094.1">.</a> <em>Bull. Amer. Meteor. Soc.,</em> 93, 485–498, doi: <a href="https://doi.org/10.1175/BAMS-D-11-00094.1">10.1175/BAMS-D-11-00094.1</a><span style="text-decoration:underline;">. </span></li>
                <li>Sweet, W.V., J. J. Marra and G. Dusek (2017): 2016 State of U.S. High Tide Flooding and a 2017 Outlook. Supplement to State of the Climate: National Overview for May 2017, published online June 2017, retrieved on 9/15/17 from <a href="https://www.ncdc.noaa.gov/monitoring-content/sotc/national/2017/may/2016_StateofHighTideFlooding.pdf">https://www.ncdc.noaa.gov/monitoring-content/sotc/national/2017/may/2016_StateofHighTideFlooding.pdf</a>.</li>
                <li>Sweet, W.V. and J. Park (2014): From the extreme and the mean: Acceleration and tipping point of coastal inundation from sea level rise. Earth Futures, 2 579-600. doi: <a href="https://doi.org/10.1002/2014EF000272">10.1002/2014EF000272</a></li>
            </ul>

            <p>

            <hr>
            </p><h2>Contact</h2>

            <p>If you have questions or comments on the Climate Explorer, please direct them to <a href="mailto:noaa.toolkit@noaa.gov">noaa.toolkit@noaa.gov</a>.</p>

        </section>

    </div>
</div>

<?php include_once('template/footer.php'); ?>

<script src="/resources/js/cwg/climate-widget-graph.js"></script>
<script src="/resources/js/cwg/cwg.js"></script>

</body>
</html>
