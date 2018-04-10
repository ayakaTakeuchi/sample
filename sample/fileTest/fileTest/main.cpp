//
//  main.cpp
//  fileTest
//
//  Created by x15064xx on 2018/02/12.
//  Copyright © 2018年 x15064xx. All rights reserved.
//

#include <iostream>
#include <fstream>

int main()
{
    const char *fileName = "/Users/x15064xx/Applications/MAMP/htdocs/fin/sample/fileTest/fileTest/test.csv";
    
    std::ofstream ofs(fileName);
    if (!ofs)
    {
        std::cout << "ファイルが開けませんでした。" << std::endl;
        std::cin.get();
        return 0;
    }
    
    ofs << "1" << std::endl;
    std::cout << fileName << "に書き込みました。" << std::endl;
    
    std::cin.get();
}
