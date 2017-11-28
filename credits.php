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

    <link rel="stylesheet" href="<?php $current_domain ?>resources/css/ol3-popup.css">

    <link rel="stylesheet" href="<?php $current_domain ?>resources/css/sweetalert.css">

    <link rel="stylesheet" media="screen" href="<?php $current_domain ?>resources/css/screen.css">
    <link rel="stylesheet" media="screen" href="<?php $current_domain ?>resources/css/mods.css">

    <script type="text/javascript" src="<?php $current_domain ?>resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php $current_domain ?>resources/js/jquery-ui.min.js"></script>

    <?php

      $share_data['url'] = current_URL();
      $share_data['title'] = 'Credits';

      echo opengraph_output($share_data);

    ?>

</head>

<body id="page-credits" class="page-type-text">
<div class="cd-cover-layer"></div>
<?php include_once('template/header.php'); ?>

<div id="viewport">
    <div id="main-content-wrap">

        <?php include_once('template/share.php'); ?>

        <section id="standard-splash" class="page-splash">
            <div class="splash-text">
                <h1>Credits & Acknowledgments</h1>
            </div>
        </section>

        <section id="standard-body" class="page-text">

          <p>The U.S. Climate Resilience Toolkit and Climate Explorer are managed by NOAA’s Climate Program Office, and hosted by NOAA’s National Centers for Environmental Information (NCEI-Asheville).</p>

          <p>Development of the Climate Explorer was directed and overseen by an interagency team of federal climate modeling experts, chaired by the U.S. Global Change Research Program (see details below).</p>

          <p>Design and programming were completed by HabitatSeven, in partnership with the National Environmental Modeling and Analysis Center (NEMAC), at UNC-Asheville. </p>

	  <p>Production and processing of the Updated Bias Corrected Constructed Analog (BCCAv2) downscaled climate projection data was accomplished through a collaborative effort supported by a range of agencies. Collaborators include the Bureau of Reclamation, Climate Analytics Group, Climate Central, Lawrence Livermore National Laboratory, Santa Clara University, Scripps Institution of Oceanography, U.S. Army Corps of Engineers, and U.S. Geological Survey. NASA Earth Exchange Downscaled Climate Projection (NEX DCP30) data were provided by NASA Ames Research Center, and PRISM historical observed data were provided by Oregon State University.</p>

          <h3>Interagency Climate Projection Team Members</h3>

          <ul>
            <li>Fred Lipschultz, Chair, contractor to U.S. Global Change Research Program</li>
            <li>Jay Alder, U.S. Geological Survey</li>
            <li>Dave Blodgett, U.S. Geological Survey</li>
            <li>Subhrendu Gangopadhyay, U.S. Bureau of Reclamation</li>
            <li>Forrest Melton, NASA Ames Research Center Cooperative for Research in Earth Science and Technology / California State University Monterey Bay</li>
            <li>Phil Morefield, U.S. Environmental Protection Agency</li>
			<li>Andrea Ray, NOAA</li>
          </ul>

          <h3>U.S. Climate Resilience Toolkit Program Management</h3>

          <ul>
            <li>David Herring, program manager, NOAA</li>
            <li>LuAnn Dahlman, managing editor, contractor to NOAA</li>
            <li>Ned Gardiner, public engagement manager, contractor to NOAA</li>
            <li>Larry Belcher, programmer, contractor to NOAA</li>
          </ul>

          <h3>Design, Programming & Development</h3>

          <ul>
            <li>Jamie Herring, president & lead designer, HabitatSeven</li>
            <li>Jordan Harding, chief technology officer, HabitatSeven</li>
            <li>Brendan Heberton, application architect, HabitatSeven</li>
            <li>Aires Almeida, chief creative officer, HabitatSeven</li>
            <li>Phil Evans, senior designer, HabitatSeven</li>
            <li>James Fox, director & product manager, NEMAC</li>
            <li>Jeff Hicks, software engineering, data analysis, NEMAC</li>
            <li>Ian Johnson, geospatial technician, NEMAC</li>
            <li>Mark Phillips, software engineering, data analysis, NEMAC</li>
          </ul>

          <h3>Thanks also to reviewers:</h3>

          <ul>
            <li>Katharine Hayhoe, climate modeler, Texas Tech University</li>
            <li>Keith Dixon, climate modeler, NOAA Geophysical Fluid Dynamics Laboratory</li>
            <li>Ken Kunkel, climate modeler, NOAA National Center for Environmental Information</li>
          </ul>

        </section>
    </div>
</div>


<?php include_once('template/footer.php'); ?>

<script src="./resources/js/cwg/climate-widget-graph.js"></script>
<script src="./resources/js/cwg/cwg.js"></script>




</body>
</html>