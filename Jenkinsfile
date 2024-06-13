pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', credentialsId: 'your-credentials-id', url: 'https://github.com/edwin-2001/Test.git'
            }
        }

        // Add other stages (e.g., install dependencies, run tests) here...
    }

    post {
        always {
            // Post-build actions (e.g., archive test results)
            archiveArtifacts 'path/to/test/reports/*.xml'
        }
    }
}
