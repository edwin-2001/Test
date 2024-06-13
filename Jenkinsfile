pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                // Checkout the code from the repository
                git 'https://your-repo-url.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                // Install Composer dependencies
                sh 'composer install'
            }
        }

        stage('Run Tests') {
            steps {
                // Run PHP Unit tests
                sh 'vendor/bin/phpunit --configuration phpunit.xml'
            }
        }
    }

    post {
        always {
            // Archive test results
            junit 'tests/reports/*.xml'

            // Clean workspace
            cleanWs()
        }
    }
}
