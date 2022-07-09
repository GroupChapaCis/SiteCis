var player = videojs('myid');

player.log('foo');
// VIDEOJS: myid: foo

var player = videojs('myid');
var mylog = player.log.createLogger('my-plugin');

mylog.log('foo');
// VIDEOJS: myid: my-plugin: foo

var player = videojs('myid');
var mylog = player.log.createLogger('my-plugin');

mylog.log.warn('foo');
// VIDEOJS: myid: my-plugin: WARN: foo

mylog.log.error('bar');
// VIDEOJS: vid1: my-plugin: ERROR: bar