# Amazon SDK version 2 plugin for CakePHP 2.0+

This plugin is a (*very*) thin veil over Amazon's [AWS SDK for PHP](https://github.com/aws/aws-sdk-php) for use in CakePHP controllers.
Forked from many others but upgraded to support new sdk 2 and removed sdk Vendor from the plugin for a more composer-compatible installation.

Warning: the new sdk is very different. Old code may no longer work.

## Installation

* Add to composer, this will also install the Amazon SDK for PHP as a dependency

        "ali1/cakephp-amazon-aws-sdk": "dev-master"

* Add the component to a controller

		public $components = array('Amazonsdk.Amazon');

## Configuration

You must add configuration to bootstrap.php.

		Configure::write('Amazonsdk.credentials', array(
			'key' => 'YOUR KEY',
			'secret' => 'YOUR SECRET',
			'region' => 'us-east-1'
		));

Don't forget to replace the placeholder text with your actual keys!

## Usage

At this point you have access to all of the methods available from the AWS SDK. The following is a small list. The full list can be found at (http://docs.aws.amazon.com/aws-sdk-php/latest/namespace-Aws.html).

* Amazon CloudFront
* Amazon CloudWatch
* Amazon DynamoDB
* Amazon ElastiCache
* Amazon Elastic Compute Cloud (Amazon EC2)
* Amazon Elastic MapReduce
* Amazon Relational Database Service (Amazon RDS)
* Amazon Simple Notification Service (Amazon SNS)
* Amazon Simple Queue Service (Amazon SQS)
* Amazon Simple Storage Service (Amazon S3)
* Amazon Simple Workflow Service
* Amazon SimpleDB
* Amazon Simple Email Service
* Amazon Virtual Private Cloud (Amazon VPC)
* Auto Scaling
* AWS CloudFormation
* AWS Elastic Beanstalk
* AWS Import/Export
* AWS Identity and Access Management
* Elastic Load Balancing

Not all of the methods for each service has been thoroughly tested. If you run into any issues, feel free to open an issue here, on the repository.

The specific objects for each service can be accessed through the component as a member of it. Here are some examples:

* `$this->Amazon->Sns`
* `$this->Amazon->CloudFront`
* `$this->Amazon->CloudWatch`
* `$this->Amazon->Ec2`
* `$this->Amazon->ElasticBeanstalk`
* `$this->Amazon->Sqs`

## Example

## Notes

