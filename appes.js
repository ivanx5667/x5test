var elasticsearch = require('elasticsearch');
var client = new elasticsearch.Client({
   hosts: '172.30.223.158:9200'
});
  
   
  client.ping({
     requestTimeout: 30000,
 }, function(error) {
     if (error) {
         console.error('elasticsearch cluster is down!');
     } else {
         console.log('Everything is ok');
     }
 });
 