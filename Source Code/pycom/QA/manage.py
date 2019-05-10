#!/usr/bin/env python
#!/usr/bin/env python
# -*- coding: utf-8 -*-
#===============================================================================
#
# Copyright (c) 2012-2015 Michael Nielsen
# Copyright (c) 2017 Hai Liang Wang<hailiang.hl.wang@gmail.com> All Rights Reserved
#
#
# File: /Users/hain/ai/InsuranceQA-Machine-Learning/deep_qa_1/network.py
# Author: Hai Liang Wang
# Date: 2017-08-08:18:32:05
#
#===============================================================================

"""
   A Simple Network to learning QA.


"""

from __future__ import print_function
from __future__ import division
import copy as cp
import json
import jieba

import os
import sys

if __name__ == '__main__':
    os.environ.setdefault('DJANGO_SETTINGS_MODULE', 'QA.settings')
    try:
        from django.core.management import execute_from_command_line
    except ImportError as exc:
        raise ImportError(
            "Couldn't import Django. Are you sure it's installed and "
            "available on your PYTHONPATH environment variable? Did you "
            "forget to activate a virtual environment?"
        ) from exc
    execute_from_command_line(sys.argv)
