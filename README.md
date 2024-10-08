[Demo](https://xs679698.xsrv.jp/ssh-keygen-laravel/public/generate)

# Usage

```bash
curl localhost:8000/generate | jq
```

<details>
<summary>Output</summary>

```json
{
  "command": "ssh-keygen -f '9760d9d9-4188-4f15-bc2e-448ae89a8c3c' -N '' -C ''",
  "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQC6UXaE0/gMCvC/QeIG1ndDPtKxNcUa5NUN4jqi6UwDSaJsd7nDltcPLrKN171YGWk6gaSGBUnnklyoZL3OCXrrVzsqWP4OJgrCMZx4zeA8HWl6Wfcl4MPXI4pbD5DKBfmgZyZojYTnI8246AAMldbDlot93PMoaCVhLtf4KXgdx89GQJsP+dNQsR+otYIRj8Q1TVv6H4feXC9mX7FSIETAUepl+5g5oN83re4puolicKRnlx5v9Lep6IPUOQL9KjZUA8mL/FdAHY3GH+kZJqFypk83jQ8fuy8HfK4O/6GjrtR2V8cOhkEnvfRDIENretkb54vX0vXS/pv/rM2bUp8GY6qK/s6P7cBDx76Aql11druBHDvyCaInRR4nrX77mP8vxMiSSvpkTs/ulhvt0ZLWjcljQgobASYuhwmBSrdd4DMHwdNa1wwb/3FtTv33iY9djfisEpXkkoN6VOD7+DZBFSWLThF8ENPLeETTT9gRltWCpsv21HLV0KAYQZSHIuM= \n",
  "private_key": "-----BEGIN OPENSSH PRIVATE KEY-----\nb3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAABlwAAAAdzc2gtcn\nNhAAAAAwEAAQAAAYEAulF2hNP4DArwv0HiBtZ3Qz7SsTXFGuTVDeI6oulMA0mibHe5w5bX\nDy6yjde9WBlpOoGkhgVJ55JcqGS9zgl661c7Klj+DiYKwjGceM3gPB1peln3JeDD1yOKWw\n+QygX5oGcmaI2E5yPNuOgADJXWw5aLfdzzKGglYS7X+Cl4HcfPRkCbD/nTULEfqLWCEY/E\nNU1b+h+H3lwvZl+xUiBEwFHqZfuYOaDfN63uKbqJYnCkZ5ceb/S3qeiD1DkC/So2VAPJi/\nxXQB2Nxh/pGSahcqZPN40PH7svB3yuDv+ho67UdlfHDoZBJ730QyBDa3rZG+eL19L10v6b\n/6zNm1KfBmOqiv7Oj+3AQ8e+gKpddXa7gRw78gmiJ0UeJ61++5j/L8TIkkr6ZE7P7pYb7d\nGS1o3JY0IKGwEmLocJgUq3XeAzB8HTWtcMG/9xbU7994mPXY34rBKV5JKDelTg+/g2QRUl\ni04RfBDTy3hE00/YEZbVgqbL9tRy1dCgGEGUhyLjAAAFeDaU3WU2lN1lAAAAB3NzaC1yc2\nEAAAGBALpRdoTT+AwK8L9B4gbWd0M+0rE1xRrk1Q3iOqLpTANJomx3ucOW1w8uso3XvVgZ\naTqBpIYFSeeSXKhkvc4JeutXOypY/g4mCsIxnHjN4DwdaXpZ9yXgw9cjilsPkMoF+aBnJm\niNhOcjzbjoAAyV1sOWi33c8yhoJWEu1/gpeB3Hz0ZAmw/501CxH6i1ghGPxDVNW/ofh95c\nL2ZfsVIgRMBR6mX7mDmg3zet7im6iWJwpGeXHm/0t6nog9Q5Av0qNlQDyYv8V0AdjcYf6R\nkmoXKmTzeNDx+7Lwd8rg7/oaOu1HZXxw6GQSe99EMgQ2t62Rvni9fS9dL+m/+szZtSnwZj\nqor+zo/twEPHvoCqXXV2u4EcO/IJoidFHietfvuY/y/EyJJK+mROz+6WG+3RktaNyWNCCh\nsBJi6HCYFKt13gMwfB01rXDBv/cW1O/feJj12N+KwSleSSg3pU4Pv4NkEVJYtOEXwQ08t4\nRNNP2BGW1YKmy/bUctXQoBhBlIci4wAAAAMBAAEAAAGAPKJmP7P79W9aCeQW+sKw7WF0j9\nc/3hC6hVoqWvoxkqBUC5irC8v7ESXRVffv1svuQuwN7s+pzYMERIkEfBj5t70btBxiEZiv\nx6L9mRLm9qlbukWs+Na85Tbbv+bA5/4pztnC1iO4LMCqIpLd8TqSOfS0ULGnMG80OvxTrJ\n9SR97Oxb4guIJFEu2RsAXh3nU7FV2noS7BuMunYVmjC2cU+MGv1qCaWabQ/f3MlCfwreia\nmFvFvAmX++N/g4FKR7mEhV981E6Pe0ESM76EcDJ4OuAL74cenhBckdGivW4bUtR+T9/mRp\n72MRr7nxO7W4BUhu6zlWlruNgW1kaSrIjcI2PjmcH1gL96bE3WKml2rXEFMhf0VYsE2bnF\n+iEjRf/UCD0grwhYYVD+6msm3YfZLNPLk7Jniudd/AhxayxKMVO5iT4GVVYZvByD39Inhw\nTCI5Xe07zXSm3sQS2Rc4EpeG3b9UXwa30qLNYeRe+e6IvhcB+gFVB9odGh1yF4g1OBAAAA\nwQCy81Ls8wztvE0z/tf/l6Nm4ZuWQlZwzgpMp+JyXpCgWvpZEW2DyjZ2tGQQjW2elXohwa\nNQeFbU8axv3+tL8hNwZ4BQJlaaM3d1c8WgRUTUpTMFAX93vJRnut1bvxS0n+v7xuS15I0E\nEqWFlRObdq23Uw07r9lo+G1PESJXEFTt5pc7swKh2L9AhWleHQMgQ6qt5sIRqlaYX0MQK5\nh4g0/gCop6FDf02JQS1XVHMnWkOm+CW2uVzEH1hwgEnpBCBL8AAADBAPhaASvLmtKqR371\nyfhNK9KqRUjDTsbABZMq/Zo2eUKLzShiLBvmWYjtf+A5hDNbLPxqm3NTJ9FsQEeoUReIe1\nkgllgxJ33Qj2ExH+P6UUpLiSpK0wBiy2ZTXwT0wbisgbW4rYMBwdoZO9nvMxVnYO7hgUZc\nfmDRmH8rkPn35KhZ1e5OnrlvRHuRqZuXmwAdFjbvXYwIS3g9p+mKMECQvHNmCipwng8M7o\nWCL66K31f4w7sHBu0cAf0r8ue4NSxI5wAAAMEAwA5jsnE3/Rh3Ym09fMHtr9M+LMht5ZKP\nZ9uGaK00qMXfHTNe81R32P2gDXKf7LNbYCtia3Lsg7wJWY+dICuYfKxt6cIjfEG88FERjM\nCM8zC8AAvoTUQxiRMqort1irZnfIetckZATEHd4dSaAGBR674KkU1PEop6P1DwUrrZRG7+\n1xpK3iKnVgf+yfZKRjU+3DNqCZ9hMIq+MWsE1hFIVP1o7Z0L5RL/2REHK+aFlxyCXi1OfC\nyYMDnamYwQv+qlAAAAAAEC\n-----END OPENSSH PRIVATE KEY-----\n"
}
```
</details>

```bash
curl localhost:8000/generate?t=ED25519 | jq
```

<details>
<summary>Output</summary>

```json
{
  "command": "ssh-keygen -f '9a22091b-3f68-4697-b5a1-391ca870d839' -N '' -C '' -t 'ED25519'",
  "public_key": "ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIFVmNIlMrrkoykPpo+2Iu62ZSYrAEnBL4NtDdzRUq+h1 \n",
  "private_key": "-----BEGIN OPENSSH PRIVATE KEY-----\nb3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAAAMwAAAAtzc2gtZW\nQyNTUxOQAAACBVZjSJTK65KMpD6aPtiLutmUmKwBJwS+DbQ3c0VKvodQAAAIjQfFDS0HxQ\n0gAAAAtzc2gtZWQyNTUxOQAAACBVZjSJTK65KMpD6aPtiLutmUmKwBJwS+DbQ3c0VKvodQ\nAAAEBHPcOzygxLDV7UOsv6Syglz0lCEO9XTb8tgtxFaq8CYFVmNIlMrrkoykPpo+2Iu62Z\nSYrAEnBL4NtDdzRUq+h1AAAAAAECAwQF\n-----END OPENSSH PRIVATE KEY-----\n"
}
```
</details>

```bash
curl 'localhost:8000/generate?t=RSA&b=2048&N=this_is_password&C=this_is
_comment' | jq
```

<details>
<summary>Output</summary>

```json
{
  "command": "ssh-keygen -f 'fae498ff-1c88-4150-ba14-6b388dcbe3ac' -N 'this_is_password' -C 'this_is_comment' -t 'RSA' -b '2048'",
  "public_key": "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQC/4Hjd1htUr4xeGkObT0bbQOS/gAwun7jr1q8Z8q0IJDlX/9BSspnEyl4DD1FilZiZ/PFjhSFf810LkMU1Ly3Py7m/8iPAZbseTnNTS58MgQcFXTiur4kAwDfNn25ylT4FoVQe9jnPfjqso8eZpkj7BfBj9umqqrGAnUieAXQlzDQYIyWqVO1Bw47+gaD9SEOYGLh714H4FpK3RUTZnVw/sT4lOUnFkomEPjXJfPh2ozgs2DU42A3fa67TxtFpL1/aRWDxkZO9dheXqViciylbR+nrjO1XFkxZ9xxj+JMWJS4Uc7L995leTGpQuu82mUeAfoZtp7dWB1zbJJiQkJ5d this_is_comment\n",
  "private_key": "-----BEGIN OPENSSH PRIVATE KEY-----\nb3BlbnNzaC1rZXktdjEAAAAACmFlczI1Ni1jdHIAAAAGYmNyeXB0AAAAGAAAABDJblzT/N\nvmp7K7k15Zs4/zAAAAEAAAAAEAAAEXAAAAB3NzaC1yc2EAAAADAQABAAABAQC/4Hjd1htU\nr4xeGkObT0bbQOS/gAwun7jr1q8Z8q0IJDlX/9BSspnEyl4DD1FilZiZ/PFjhSFf810LkM\nU1Ly3Py7m/8iPAZbseTnNTS58MgQcFXTiur4kAwDfNn25ylT4FoVQe9jnPfjqso8eZpkj7\nBfBj9umqqrGAnUieAXQlzDQYIyWqVO1Bw47+gaD9SEOYGLh714H4FpK3RUTZnVw/sT4lOU\nnFkomEPjXJfPh2ozgs2DU42A3fa67TxtFpL1/aRWDxkZO9dheXqViciylbR+nrjO1XFkxZ\n9xxj+JMWJS4Uc7L995leTGpQuu82mUeAfoZtp7dWB1zbJJiQkJ5dAAAD0PW3XqBtY6MQDD\nw5cuLaF28e8+E3hbcBQp7UvQcqqPqbq0xfV/yBiDq56ssBSqczQgP6F9CY5w/j7qWuUL9r\nFG1pIvm2tHZmEVTNPaNPr/FJ7fvFuxhZc720C0O2ZDkNKuKyK4+QjwfJObN4Xjk1ayhTw2\nW+fP/ZhLEtN+d48RVSu81WUUX9Zl6wXnicxtv6p1OLNUl9SfmatyOPdVVRSNqqe+pJkUwT\n0wSMxqt/8Uiio7vxOESYMwkM0Gxn1ca7Nq9s2dDjRxdMc8U6tZzc8ftNdGzopicyaT+OMi\nAWWPlvr36Z5AEc6kj+p+9HhPIf9MAe+XmjuyLMLp1S3J/dkGcU2lfZ6H8ZBx4VMGAWb7s6\nG50uMzLsQLCziC0B0h5+seTEos1xy1ZXcH/bwlTq3lVtePGxsdTkOAzBm6JK5YXOIOS84d\nb0pKrQ6UMkygmRnaQFckkc2hdxblaRovsVkLG4JXn9flc8sWbPaw7kdofPVFYjdMyFzjtN\n+qw/Ni8AB+HxtqEUjp5iRMPgYHHZLsHKt4gD+5cJJnVqIS6HvIwqBBkMx92FlQnM75doHC\n1toPaDiW7x0EbrVlvZ7/z6Ma2NegZVqv6zqOzpHjeB6nywV+HztgHVWJhiaXH4vH2ovkRr\nViBNWVEwtNjN09HTuln44AZWFdbaRDA0AUV4es4FfCsvMy/SejCGulDBECvwFHcBTk49n3\noF620ePHQg91Cr3X36t1Yr/f0XMTsvvRxoQta3DdOxA8cm38gCjxjp+G7aQG2fiXBI9hvt\nU+VVrvgVk8bcy2k2c71r1NzBU63ki3FtkwduhJwtvZqhYycSh1Gxmt2yqeL70mSvhxMDpc\n3FT7nmM78uTuWxWSCagYBQ+aWnD0tqOD2dyHdgd4cD7uQAeG7BPgS6IE27KblCThpHE2JU\nI5ug0imS48XMt1/P/Oj2crRC3xqZpeWILdAqCKqo3aUAOLXCruamaDloZi7mfD85FF4056\ncGtV5GQZQ8WJdHD9NuH/tBHjns1hGhDhwhB4mEiLA2lkr3HYWywjkLJVZWw17qglVwCHPX\nBCWIVWV8WEIcBirOtVSQUendpJjrVK53pXyfwcL1D4UgwR4rfF63ebfIURetg5n8EeNg9a\n4nXcvc/LjiIfnnI+mat0GaaEfqVbVofFjRj9VrAkhOKHDcjC+AIIxq6WuhiQKsJgsWH2sn\nVcQs5iUzac9v/blXUNlOZSVcTa9ZMxU8vY7PW66lpgvsMTijBZnIBHTbasZ6OFhfaIEHqJ\nF7qIS6X129xX5OojChPzBpF21Okg0=\n-----END OPENSSH PRIVATE KEY-----\n"
}
```
</details>

# Deploy

```bash
git clone https://github.com/GitHub30/ssh-keygen-laravel
cd ssh-keygen-laravel
# For Xserver
#curl -s https://getcomposer.org/installer | php8.3
#alias php=php8.3
#alias composer='php8.3 composer.phar'
composer install
composer run-script post-root-package-install
composer run-script post-create-project-cmd
php artisan serve
```
