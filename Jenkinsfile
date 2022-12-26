pipeline {
    agent {
        docker {
            image 'composer:latest'
        }
    }
    stages {
        stage('Clone Git') {
            steps {
                echo 'Cloning from git...'
                git credentialsId: 'github_login_jaimeadm', url: 'https://github.com/jaimeadm/phpunit.git'
            }
        }
        stage('Composer Update') {
            steps {
		        echo 'Bulding...'
                sh 'composer update'
            }
        }
        stage('PHPUnit Test') {
            steps {
                sh './vendor/bin/phpunit --bootstrap vendor/autoload.php tests'
            }
            post {
                always {
                    emailext attachLog: true, body: 'OK: Veja o log anexado', subject: 'Build $BUILD_NUMBER sucesso', to: 'alan.silva@jaime.com.br'
                }
            }
        }
    }
}    