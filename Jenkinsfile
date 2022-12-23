pipeline {
    agent {
        docker {
            image 'composer:latest'
            #args '-v /root/.m2:/root/.m2'
        }
    }
    stages {
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