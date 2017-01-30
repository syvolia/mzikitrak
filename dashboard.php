<?php

include('conn.php');
session_start();
$check=$_SESSION['SESS_username'];
$session43=sqlsrv_query($conn, "SELECT * FROM LoginCredentials WHERE Username='$check' ");
$row43=sqlsrv_fetch_array($session43);
$login_session=$row43['Username'];
$status=$row43['Status'];
if(!isset($login_session))
{
header("Location:index.php");
}

if ($status==0) {
 header('location:moredeatails.php');
}
else{
?>


<!DOCTYPE html>
<html lang="en" class="app">
<?php include 'css.php' ?>
<body class="">
  <section class="vbox">
    <?php include 'header.php'; ?>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'aside.php'; ?>
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="vbox">
                  <section class="scrollable padder">
                    <div class="m-b-md">
                      <div class="row">
                        <div class="col-sm-6">
                          <h3 class="m-b-none">Charts</h3>
                          <small>Statistics & graph information</small>
                        </div>
                        <div class="col-sm-6">
                          <div class="text-right text-left-xs">
                            <div class="sparkline m-l m-r-lg pull-right" data-type="bar" data-height="35" data-bar-width="6" data-bar-spacing="2" data-bar-color="#fff">5,8,9,12,8,10,8,9,7,8,6</div>
                            <div class="m-t-md">
                              <span class="text-uc">New users</span>
                              <div class="h4 m-n"><strong>1,120,100</strong></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <section class="panel panel-default">
                      <header class="panel-heading font-bold">Site statistics</header>
                      <div class="panel-body">
                        <div id="flot-1ine" style="height:250px"></div>
                      </div>
                      <footer class="panel-footer bg-white">
                        <div class="row text-center no-gutter">
                          <div class="col-xs-3 b-r b-light">
                            <p class="h3 font-bold m-t">5,860</p>
                            <p class="text-muted">Orders</p>
                          </div>
                          <div class="col-xs-3 b-r b-light">
                            <p class="h3 font-bold m-t">10,450</p>
                            <p class="text-muted">Sellings</p>
                          </div>
                          <div class="col-xs-3 b-r b-light">
                            <p class="h3 font-bold m-t">21,230</p>
                            <p class="text-muted">Items</p>
                          </div>
                          <div class="col-xs-3">
                            <p class="h3 font-bold m-t">7,230</p>
                            <p class="text-muted">Customers</p>
                          </div>
                        </div>
                      </footer>
                    </section>
                    <div class="row">
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Multiple</header>
                          <div class="panel-body">
                            <div id="flot-chart"  style="height:240px"></div>
                          </div>
                        </section>
                      </div>
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Real-time update</header>
                          <div class="panel-body">
                            <div id="flot-live"  style="height:240px"></div>
                          </div>
                        </section>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Vertical bar</header>
                          <div class="panel-body">
                            <div id="flot-bar"  style="height:240px"></div>
                          </div>
                        </section>
                      </div>
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Horizontal bar</header>
                          <div class="panel-body">
                            <div id="flot-bar-h"  style="height:240px"></div>
                          </div>
                        </section>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Pie Chart</header>
                          <div class="panel-body">
                            <div id="flot-pie"  style="height:240px"></div>
                          </div>
                        </section>
                      </div>
                      <div class="col-md-6">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Donut pie</header>
                          <div class="panel-body">
                            <div id="flot-pie-donut"  style="height:240px"></div>
                          </div>
                        </section>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <section class="panel panel-default">
                          <header class="panel-heading">Pie</header>
                          <div class="panel-body text-center">
                            <div class="sparkline inline" data-type="pie" data-height="154" data-slice-colors="['#1ccacc','#f2f2f2']">60,40</div>
                            <div class="line pull-in"></div>
                            <div class="text-xs">
                              <i class="fa fa-circle text-info"></i> 60%
                              <i class="fa fa-circle text-muted"></i> 40%
                            </div>
                          </div>
                        </section>
                      </div>
                      <div class="col-lg-4">
                        <section class="panel panel-default">
                          <header class="panel-heading font-bold">Data graph</header>
                          <div class="bg-light dk wrapper">
                            <span class="pull-right">Friday</span>
                            <span class="h4">$540</span>
                            <div class="text-center m-b-n m-t-sm">
                                <div class="sparkline" data-type="line" data-height="65" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true">280,320,220,385,450,320,345,250,250,250,400,380</div>
                                <div class="sparkline inline" data-type="bar" data-height="45" data-bar-width="6" data-bar-spacing="6" data-bar-color="#1ccc88">10,9,11,10,11,10,12,10,9,10,11,9,8</div>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-xs-4">
                                <small class="text-muted block">Market</small>
                                <span>$1500.00</span>
                              </div>
                              <div class="col-xs-4">
                                <small class="text-muted block">Referal</small>
                                <span>$600.00</span>
                              </div>
                              <div class="col-xs-4">
                                <small class="text-muted block">Affiliate</small>
                                <span>$400.00</span>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                      <div class="col-lg-4">
                        <section class="panel panel-default">
                          <header class="panel-heading">Stacked</header>
                          <div class="panel-body text-center">
                            <div class="sparkline inline" data-type="bar" data-height="193" data-bar-width="12" data-bar-spacing="10" data-stacked-bar-color="['#c9d0d7', '#eee']">5:5,8:4,12:5,10:6,11:7,12:2,8:6,9:3,5:5,4:9</div>
                          </div>
                        </section>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4">
                        <section class="panel panel-default">
                          <header class="panel-heading">
                            Conversion
                          </header>
                          <div class="panel-body text-center">
                            <h4>62.5<small> hrs</small></h4>
                            <small class="text-muted block">Updated at 2 minutes ago</small>
                            <div class="inline">
                              <div class="easypiechart" data-percent="75" data-bar-color="#fcc633" data-line-width="16" data-loop="false" data-size="188">
                                <div>
                                  <span class="h2 m-l-sm step">75</span>%
                                  <div class="text text-sm">new</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel-footer"><small>% of avarage rate of the Conversion</small></div>
                        </section>
                      </div>
                      <div class="col-lg-4">
                        <section class="panel panel-default">
                          <header class="panel-heading">
                            Bounce rate
                          </header>
                          <div class="panel-body text-center">
                            <h4><small>last </small>12<small> hrs</small></h4>
                            <small class="text-muted block">yesterday: 20%</small>
                            <div class="inline">
                              <div class="easypiechart" data-percent="25" data-line-width="6" data-loop="false" data-size="188">
                                <div>
                                  <span class="h2 m-l-sm step">25</span>%
                                  <div class="text text-sm">today</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel-footer"><small>% of change</small></div>
                        </section>
                      </div>
                      <div class="col-lg-4">
                        <section class="panel panel-default">
                          <header class="panel-heading">
                            New visitors
                          </header>
                          <div class="panel-body text-center">
                            <h4>3,450</h4>
                            <small class="text-muted block">Worldwide visitors</small>
                            <div class="inline">
                              <div class="easypiechart" data-percent="60" data-line-width="10" data-track-color="#eee" data-bar-color="#1ccc88" data-scale-color="#fff" data-size="188" data-line-cap='butt'>
                                <div>
                                  <span class="h2 m-l-sm step">60</span>%
                                  <div class="text text-sm">new visits</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel-footer"><small>% of avarage rate of the visits</small></div>
                        </section>
                      </div>
                    </div>
                  </section>
                </section>
                <footer class="footer bg-dark">
                  <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>
  </section>
  <?php include 'scripts.php'; ?>
</body>
</html>

<?php
}
?>
