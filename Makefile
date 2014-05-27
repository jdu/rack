test-php:
  echo "Running PHP Tests"
  ./php-api/test.sh

test-python:
  echo "Running Python Tests"
  ./data-api/test.sh

default:
  echo "There is no default"
