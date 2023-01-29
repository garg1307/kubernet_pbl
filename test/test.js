var request = require('supertest');
var app = require('../routes/auth.js');
describe('Login', function() {
    it('should let you log in and sign up', function(done) {
        request(app).get('/check').expect('{ "response": "Authorization Successfull" }', done);
    });
});