pipeline {
    agent any
    tools {
     nodejs '16.9.1'
           }
     environment {
       DOCKERHUB_CREDENTIALS = credentials('docker-id')
                 }
    stages {
        stage('Build') {
            steps {
                  script {
                         def dockerHome = tool 'docker_latest'
                         env.PATH = "${dockerHome}/bin:${env.PATH}"
                         }
                  echo 'Building..'
                  sh 'npm install'
                  sh 'docker build -t rishab1101/kubernet-pbl:$BUILD_NUMBER .'
                  }
                  }
//        stage('Tests') {
//            steps {
//                   script {
//                        echo 'Testing..'
//                       sh 'npm test'    
//                          }                 
//                  }
//                  }
        stage('login to dockerhub') {
            steps {
                   sh 'docker login -u AWS https://089546056955.dkr.ecr.ap-south-1.amazonaws.com -p $(aws ecr get-login-password --region ap-south-1)'
                  }
                  }
        stage('push docker image') {
            steps {
                   sh 'docker push rishab1101/kubernet-pbl:$BUILD_NUMBER' 
                  }     
                  }
} }