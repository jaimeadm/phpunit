pipeline {
    agent {
        docker {
            image 'composer:latest'
        }
    }
    stages {
        stage('Clone') {
            steps {
                echo 'Cloning...'
                git credentialsId: 'github_login_jaimeadm', url: 'https://github.com/jaimeadm/phpunit.git'
            }
        }
        stage('Build') {
            steps {
		        echo 'Bulding...'
                sh 'composer update'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
                sh './vendor/bin/phpunit --bootstrap vendor/autoload.php tests'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
            post {
                always {
                    emailext attachLog: true, body: 'OK: Veja o log anexado', subject: 'Build $BUILD_NUMBER sucesso', to: 'alan.silva@jaime.com.br'
                }
            }
        }
    }
}    