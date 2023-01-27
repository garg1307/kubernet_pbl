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
                  sh 'mvn clean install'
                  }
                  }
        stage('Tests') {
            steps {
                   script {
                        echo 'Testing..'
                        sh 'npm test'    
                          }                 
                  }
            }
} }