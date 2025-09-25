# 📝 Pull Request 模板 / Pull Request Template

> 请完整填写；中英文均可。Please fill out thoroughly (Chinese or English are both fine).
>
> 目标：提高可读性、可审核性、可追踪性，便于维护者快速 triage。

---

## 1. 变更类型 / Type of change

- [ ] Bug 修复 (bug fix)
- [ ] 新功能 (new feature)
- [ ] 功能改进 / 重构 (refactor / enhancement)
- [ ] 性能优化 (performance)
- [ ] 文档更新 (docs)
- [ ] 测试相关 (tests)
- [ ] 构建 / CI / 运维 (build / CI / ops)
- [ ] 安全修补 (security)
- [ ] 其它 (other): _请描述 / describe_

## 2. 关联 Issue

Fixes # (如自动关闭：`Fixes #123`)  
Related #

## 3. 背景与动机 / Motivation & Context

为什么需要这些更改？What problem does this solve?  
_简述使用者痛点 / user pain points, 业务或性能驱动理由。_

## 4. 变更内容概述 / Summary of changes

- 核心改动 (core changes):
- 影响范围 (affected areas / modules):
- 是否涉及扩展/皮肤接口 (extensions/skins interfaces touched):

## 5. 实现细节 / Implementation details

_描述关键设计、算法、数据结构、依赖调整。Explain design, algorithms, data structure, dependency adjustments._

## 6. 向后兼容性 / Backwards compatibility

- [ ] 完全兼容 (fully compatible)
- [ ] 需要小幅调整 (minor consumer change)
- [ ] 破坏性变更 (breaking change)

若有破坏性变更：

1. 影响对象 / Who is affected:
2. 迁移路径 / Migration path:
3. 升级指引文档位置 / Documentation link:

## 7. 性能影响 / Performance impact

- 基线对比 (baseline vs new): _若有基准测试数据，请贴上 / include benchmark figures_
- 复杂度分析 (complexity): O(...)
- 资源占用 (memory/IO/db queries):
- 缓存策略 (caching strategy):

## 8. 安全 / 隐私考量 Security & Privacy

- 是否处理用户输入 / user input sanitization: ✅/⚠️/❌
- 新增权限点 / new rights or groups: (列出 / list)
- 数据暴露 / data exposure 评估:
- XSS / CSRF / SSRF / SQLi 评估:
- 其它风险 (others):

## 9. 国际化与本地化 / i18n & l10n

- 新增消息键 (new message keys): (列出或说明)  
- 是否提供英文默认与中文翻译：Yes/No  
- 需更新的翻译文件：

## 10. 测试覆盖 / Tests

- [ ] 新增单元测试 (unit tests added)
- [ ] 新增集成 / 功能测试 (integration/feature tests)
- [ ] 更新既有测试 (updated existing tests)
- [ ] 暂无测试（请说明原因）No tests (justify):

测试要点 / Test focus:

1.
2.
3.

如何复现并验证本 PR：Steps to reproduce & verify:

```bash
# 命令 / commands, SQL, curl, etc.
```

## 11. 文档 / Documentation

- [ ] README / 用户指南已更新 (updated docs)  
- [ ] 开发文档 / 架构文档更新 (developer/arch docs)  
- [ ] 不需要 (not needed)

若需要文档但未补齐，请解释计划：

## 12. 截图 / UI 变化 (如适用)

| Before | After |
| ------ | ----- |
| (截图) | (截图) |

可选：动画 / GIF：

## 13. 回归风险 / Regression risks

- 可能影响的旧逻辑 / Areas susceptible to regression:
- 降级/回滚策略 / Rollback plan:

## 14. 提交前自检清单 / Pre‑merge Checklist

请在本地或 CI 确认以下项目（勾选代表你已确认）：

- [ ] 通过 PHP 版本与扩展要求 (meets PHP & extension requirements)
- [ ] 通过 lint / code style (PHPCS / ESLint / Style checks)
- [ ] 通过 PHPUnit 测试 (PHPUnit green)
- [ ] 通过 JS 构建 (如果涉及) build ok
- [ ] 没有引入多余调试输出 (no stray debug / var_dump / console.log)
- [ ] Secrets 未泄露 (no secrets or tokens in code / logs)
- [ ] 消息文本 (i18n) 语义正确，无硬编码可本地化字符串
- [ ] 数据库 schema 变更（如有）已附迁移与回滚说明
- [ ] 性能敏感路径已评估 (hot paths performance considered)
- [ ] 安全相关逻辑已自审 (security self‑review done)

## 15. 后续计划 / Follow‑up tasks

列出需要在后续 PR/Issue 继续处理的事项：

- [ ]
- [ ]

## 16. 反馈与使用者价值 / User impact & feedback loop

此更改将如何改善使用者体验？How will this improve user experience?

是否需要收集后续反馈（日志/指标/问卷）？Need telemetry or feedback follow‑up?

建议的观测指标 / Suggested metrics

- 

## 17. 额外说明 / Additional notes

_任何审查者需要知道但未包含前面章节的信息。Anything else reviewers should know._

---
感谢你的贡献！Thanks for contributing! 🙌
