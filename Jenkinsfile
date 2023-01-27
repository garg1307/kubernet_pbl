pipeline {
    agent any
    tools {
     nodejs '16.9.1'
           }
    stages {
        stage('Build') {
            steps {
                  echo 'Building..'
                  sh 'npm install'
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
        stage('Build and push docker image') {
            steps {
                script {
                    def dockerImage = docker.build("garg1307/kubernet_pbl:master")
                    docker.withRegistry('', 'docker-id') {
                        dockerImage.push('master') }
                       }
                  }
                  }
        stage('Deploy to remote docker host') {
            environment {
                DOCKER_HOST_CREDENTIALS = credentials('docker-id')}
            steps {
                script {
//                  sh 'docker login -u $DOCKER_HOST_CREDENTIALS_USR -p $DOCKER_HOST_CREDENTIALS_PSW 127.0.0.1:2375'
                    sh 'docker pull garg1307/kubernet_pbl:master'
                    sh 'docker stop kubernet_pbl'
                    sh 'docker rm kubernet_pbl'
                    sh 'docker rmi garg1307/kubernet_pbl:current'
                    sh 'docker tag garg1307/kubernet_pbl:master garg1307/kubernet_pbl:current'
                    sh 'docker run -d --name kubernet_pbl -p 80:3000 garg1307/kubernet_pbl:current'
                        }
            }
            }
} }